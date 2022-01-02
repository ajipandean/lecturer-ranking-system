<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $table = 'criterias';
    protected $fillable = [
        'lecturer_id',
        'penilaian_mahasiswa',
        'penilaian_dosen',
        'penilaian_atasan',
        'kualifikasi_pendidikan',
        'penelitian',
        'jurnal',
        'pelatihan',
        'seminar',
        'pengabdian_masyarakat',
        'jabatan_akademik'
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id');
    }
}
