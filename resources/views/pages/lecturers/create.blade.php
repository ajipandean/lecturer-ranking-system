@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-dark">Data Calon Dosen Berprestasi</h4>
                            </div>

                            <div class="card-body">
                                <div class="section-title my-3">Data Dosen</div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="number" class="form-control" id="nik">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama">
                                        </div>
                                    </div>
                                </div>

                                <div class="section-title my-3">Data Kriteria</div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="penilaian-mahasiswa">Penilaian Mahasiswa</label>
                                            <input type="number" class="form-control" id="penilaian-mahasiswa">
                                        </div>
                                        <div class="form-group">
                                            <label for="penilaian-dosen">Penilaian Dosen</label>
                                            <input type="number" class="form-control" id="penilaian-dosen">
                                        </div>
                                        <div class="form-group">
                                            <label for="penilaian-atasan">Penilaian Atasan</label>
                                            <input type="number" class="form-control" id="penilaian-atasan">
                                        </div>
                                        <div class="form-group">
                                            <label for="kualifikasi-pendidikan">Kualifikasi Pendidikan</label>
                                            <select id="kualifikasi-pendidikan" class="form-control">
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-penelitian">Banyaknya Penelitian</label>
                                            <input type="number" class="form-control" id="banyaknya-penelitian">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="banyaknya-jurnal">Banyaknya Jurnal</label>
                                            <input type="text" class="form-control" id="banyaknya-jurnal">
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-pelatihan">Banyaknya Pelatihan</label>
                                            <input type="number" class="form-control" id="banyaknya-pelatihan">
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-seminar">Banyaknya Seminar</label>
                                            <input type="number" class="form-control" id="banyaknya-seminar">
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-pengabdian-masyarakat">Banyaknya Pengabdian Masyarakat</label>
                                            <input type="number" class="form-control" id="banyaknya-pengabdian-masyarakat">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="jabatan-akademik">Jabatan Akademik</label>
                                            <select id="jabatan-akademik" class="form-control">
                                                <option value="Asisten Ahli">Asisten Ahli</option>
                                                <option value="Rektor">Rektor</option>
                                                <option value="Pengajar">Pengajar</option>
                                                <option value="Guru Besar">Guru Besar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="submit" class="btn btn-link">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
