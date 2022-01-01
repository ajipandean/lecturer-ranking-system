<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->integer('penilaian_mahasiswa');
            $table->integer('penilaian_dosen');
            $table->integer('penilaian_atasan');
            $table->integer('kualifikasi_pendidikan');
            $table->integer('penelitian');
            $table->integer('jurnal');
            $table->integer('pelatihan');
            $table->integer('seminar');
            $table->integer('pengabdian_masyarakat');
            $table->integer('jabatan_akademik');
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
        Schema::dropIfExists('criterias');
    }
}
