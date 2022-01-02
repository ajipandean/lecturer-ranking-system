<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama')->unique();
            $table->integer('penilaian_mahasiswa');
            $table->integer('penilaian_dosen');
            $table->integer('penilaian_atasan');
            $table->string('kualifikasi_pendidikan');
            $table->integer('penelitian');
            $table->integer('jurnal');
            $table->integer('pelatihan');
            $table->integer('seminar');
            $table->integer('pengabdian_masyarakat');
            $table->string('jabatan_akademik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
}
