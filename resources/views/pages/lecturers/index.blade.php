@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Data Hasil Penilaian</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Penilaian Mahasiswa</th>
                                            <th>Penilaian Dosen</th>
                                            <th>Penilaian Atasan</th>
                                            <th>Kualifikasi Pendidikan</th>
                                            <th>Penelitian</th>
                                            <th>Jurnal</th>
                                            <th>Pelatihan</th>
                                            <th>Seminar</th>
                                            <th>Pengabdian Masyarakat</th>
                                            <th>Jabatan Akademik</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>432000007</td>
                                            <td>Dani Rohpandi</td>
                                            <td>86</td>
                                            <td>80</td>
                                            <td>75</td>
                                            <td>S2</td>
                                            <td>1</td>
                                            <td>1 Jurnal Internasional</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>Asisten Ahli</td>
                                            <td style="width: 200px;">
                                                <a href="#" class="btn btn-warning btn-icon btn-sm icon-left"><i class="fas fa-edit"></i> Ubah</a>
                                                <button type="button" class="btn btn-danger btn-icon btn-sm icon-left" data-toggle="modal" data-target="#modal"><i class="fas fa-trash"></i> Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Nilai Rating Kecocokan</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Penilaian Mahasiswa</th>
                                        <th>Penilaian Dosen</th>
                                        <th>Penilaian Atasan</th>
                                        <th>Kualifikasi Pendidikan</th>
                                        <th>Penelitian</th>
                                        <th>Jurnal</th>
                                        <th>Pelatihan</th>
                                        <th>Seminar</th>
                                        <th>Pengabdian Masyarakat</th>
                                        <th>Jabatan Akademik</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>432000007</td>
                                        <td>Dani Rohpandi</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
@endsection

@section('modal')
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-label">Hapus Dani Tohpandi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yaking ingin menghapus Dosen Dani Rohpandi ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Ya, hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection
