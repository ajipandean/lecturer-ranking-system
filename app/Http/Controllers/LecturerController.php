<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
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
        return view('pages.lecturers.index');
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
        Lecturer::create($fields);
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function rank()
    {
        return view('pages.lecturers.rank');
    }
}
