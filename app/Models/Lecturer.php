<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';
    protected $fillable = [
        'nik',
        'nama',
        'penilaian_mahasiswa',
        'penilaian_dosen',
        'penilaian_atasan',
        'kualifikasi_pendidikan',
        'penelitian',
        'jurnal',
        'pelatihan',
        'seminar',
        'pengabdian_masyarakat',
        'jabatan_akademik',
    ];

    public function criterias()
    {
        return $this->hasOne(Criteria::class);
    }
}
