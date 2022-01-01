<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Lecturer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::with(['criterias'])->get();
        return view('pages.lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'nik' => 'required',
                'nama' => 'required',
                'penilaian_mahasiswa' => 'required',
                'penilaian_dosen' => 'required',
                'penilaian_atasan' => 'required',
                'kualifikasi_pendidikan' => 'required',
                'penelitian' => 'required',
                'jurnal' => 'required',
                'pelatihan' => 'required',
                'seminar' => 'required',
                'pengabdian_masyarakat' => 'required',
                'jabatan_akademik' => 'required',
            ])->validate();

            $fields = [
                'nik' => $request->nik,
                'nama' => $request->nama,
                'penilaian_mahasiswa' => (int) $request->penilaian_mahasiswa,
                'penilaian_dosen' => (int) $request->penilaian_dosen,
                'penilaian_atasan' => (int) $request->penilaian_atasan,
                'kualifikasi_pendidikan' => $request->kualifikasi_pendidikan,
                'penelitian' => (int) $request->penelitian,
                'jurnal' => (int) $request->jurnal,
                'pelatihan' => (int) $request->pelatihan,
                'seminar' => (int) $request->seminar,
                'pengabdian_masyarakat' => (int) $request->pengabdian_masyarakat,
                'jabatan_akademik' => $request->jabatan_akademik,
            ];
            $created_lecturer = Lecturer::create($fields);

            $criteria_fields = [
                'lecturer_id' => $created_lecturer->id,
                'penilaian_mahasiswa' => parse_score((int) $request->penilaian_mahasiswa),
                'penilaian_dosen' => parse_score((int) $request->penilaian_dosen),
                'penilaian_atasan' => parse_score((int) $request->penilaian_atasan),
                'kualifikasi_pendidikan' => parse_education($request->kualifikasi_pendidikan),
                'penelitian' => parse_achievements((int) $request->penelitian),
                'jurnal' => parse_achievements((int) $request->jurnal),
                'pelatihan' => parse_achievements((int) $request->pelatihan),
                'seminar' => parse_achievements((int) $request->seminar),
                'pengabdian_masyarakat' => parse_achievements((int) $request->pengabdian_masyarakat),
                'jabatan_akademik' => parse_title($request->jabatan_akademik)
            ];
            Criteria::create($criteria_fields);

            DB::commit();
            return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil ditambahkan');
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->route('lecturers.index')->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturer = Lecturer::find($id);
        return view('pages.lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);

        Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'penilaian_mahasiswa' => 'required',
            'penilaian_dosen' => 'required',
            'penilaian_atasan' => 'required',
            'kualifikasi_pendidikan' => 'required',
            'penelitian' => 'required',
            'jurnal' => 'required',
            'pelatihan' => 'required',
            'seminar' => 'required',
            'pengabdian_masyarakat' => 'required',
            'jabatan_akademik' => 'required',
        ])->validate();

        $fields = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'penilaian_mahasiswa' => (int) $request->penilaian_mahasiswa,
            'penilaian_dosen' => (int) $request->penilaian_dosen,
            'penilaian_atasan' => (int) $request->penilaian_atasan,
            'kualifikasi_pendidikan' => $request->kualifikasi_pendidikan,
            'penelitian' => (int) $request->penelitian,
            'jurnal' => (int) $request->jurnal,
            'pelatihan' => (int) $request->pelatihan,
            'seminar' => (int) $request->seminar,
            'pengabdian_masyarakat' => (int) $request->pengabdian_masyarakat,
            'jabatan_akademik' => $request->jabatan_akademik,
        ];
        $lecturer->update($fields);
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecturer = Lecturer::find($id);
        $lecturer->delete();
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil dihapus');
    }

    public function rank()
    {
        $fields = [];
        $lecturers = Lecturer::with(['criterias'])->get();
        $max_penilaian_mahasiswa = Criteria::max('penilaian_mahasiswa');
        $max_penilaian_dosen = Criteria::max('penilaian_dosen');
        $max_penilaian_atasan = Criteria::max('penilaian_atasan');
        $max_kualifikasi_pendidikan = Criteria::max('kualifikasi_pendidikan');
        $max_penelitian = Criteria::max('penelitian');
        $max_jurnal = Criteria::max('jurnal');
        $max_seminar = Criteria::max('seminar');
        $max_pelatihan = Criteria::max('pelatihan');
        $max_pengabdian_masyarakat = Criteria::max('pengabdian_masyarakat');
        $max_jabatan_akademik = Criteria::max('jabatan_akademik');
        foreach ($lecturers as $l) {
            $vpm = (float) sprintf('%.3f', ($l->criterias->penilaian_mahasiswa / $max_penilaian_mahasiswa) * 3);
            $vpd = (float) sprintf('%.3f', ($l->criterias->penilaian_dosen / $max_penilaian_dosen) * 4);
            $vpa = (float) sprintf('%.3f', ($l->criterias->penilaian_atasan / $max_penilaian_atasan) * 3);
            $vkp = (float) sprintf('%.3f', ($l->criterias->kualifikasi_pendidikan / $max_kualifikasi_pendidikan) * 5);
            $vp = (float) sprintf('%.3f', ($l->criterias->penelitian / $max_penelitian) * 5);
            $vj = (float) sprintf('%.3f', ($l->criterias->jurnal / $max_jurnal) * 5);
            $vpl = (float) sprintf('%.3f', ($l->criterias->pelatihan / $max_pelatihan) * 3);
            $vs = (float) sprintf('%.3f', ($l->criterias->seminar / $max_seminar) * 3);
            $vpms = (float) sprintf('%.3f', ($l->criterias->pengabdian_masyarakat / $max_pengabdian_masyarakat) * 4);
            $vja = (float) sprintf('%.3f', ($l->criterias->jabatan_akademik / $max_jabatan_akademik) * 4);
            $nilai = array_sum([$vpm, $vpd, $vpa, $vkp, $vp, $vj, $vpl, $vs, $vpms, $vja]);
            $field = [
                'nik' => $l->nik,
                'nama' => $l->nama,
                'nilai' => $nilai,
            ];
            array_push($fields, $field);
        }
        usort($fields, function ($a, $b) {
            return $b['nilai'] - $a['nilai'];
        });
        return view('pages.lecturers.rank', compact('fields'));
    }
}
