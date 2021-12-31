@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{session('success')}}
                        </div>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Data Hasil Penilaian</h4>
                        </div>
                        <div class="card-body p-0">
                            @if (sizeof($lecturers) == 0)
                            <div class="empty-state">
                                <div class="empty-state-icon"><i class="fas fa-folder-open"></i></div>
                                <h2>Data dosen kosong</h2>
                                <p class="lead">Silakah tambahkan data dosen untuk melihat daftar hasil penilaian</p>
                                <a href="{{route('lecturers.create')}}" class="btn btn-primary">Tambah dosen</a>
                            </div>
                            @else
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
                                        @foreach ($lecturers as $l)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$l->nik}}</td>
                                            <td>{{$l->nama}}</td>
                                            <td>{{$l->penilaian_mahasiswa}}</td>
                                            <td>{{$l->penilaian_dosen}}</td>
                                            <td>{{$l->penilaian_atasan}}</td>
                                            <td>{{$l->kualifikasi_pendidikan}}</td>
                                            <td>{{$l->penelitian}}</td>
                                            <td>{{$l->jurnal}}</td>
                                            <td>{{$l->pelatihan}}</td>
                                            <td>{{$l->seminar}}</td>
                                            <td>{{$l->pengabdian_masyarakat}}</td>
                                            <td>{{$l->jabatan_akademik}}</td>
                                            <td style="width: 200px;">
                                                <a href="{{route('lecturers.edit', $l->id)}}" class="btn btn-warning btn-icon btn-sm icon-left"><i class="fas fa-edit"></i> Ubah</a>
                                                <button type="button" class="btn btn-danger btn-icon btn-sm icon-left" data-toggle="modal" data-target="#modal-{{$l->id}}"><i class="fas fa-trash"></i> Hapus</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
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
                        @if (sizeof($lecturers) == 0)
                        <div class="empty-state">
                            <div class="empty-state-icon"><i class="fas fa-folder-open"></i></div>
                            <h2>Data dosen kosong</h2>
                            <p class="lead">Silakah tambahkan data dosen untuk melihat daftar hasil rating kecocokan</p>
                            <a href="{{route('lecturers.create')}}" class="btn btn-primary">Tambah dosen</a>
                        </div>
                        @else
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
                                    @foreach ($lecturers as $l)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$l->nik}}</td>
                                        <td>{{$l->nama}}</td>
                                        <td>{{ceil($l->penilaian_mahasiswa/20)}}</td>
                                        <td>{{ceil($l->penilaian_dosen/20)}}</td>
                                        <td>{{ceil($l->penilaian_atasan/20)}}</td>
                                        @php
                                        switch($l->kualifikasi_pendidikan) {
                                        case 'S1': $kp = 1; break;
                                        case 'S2': $kp = 2; break;
                                        case 'S3': $kp = 3; break;
                                        default: $kp = 1;
                                        }
                                        @endphp
                                        <td>{{$kp}}</td>
                                        <td>{{$l->penelitian}}</td>
                                        <td>{{$l->jurnal}}</td>
                                        <td>{{$l->pelatihan}}</td>
                                        <td>{{$l->seminar}}</td>
                                        <td>{{$l->pengabdian_masyarakat}}</td>
                                        <td>{{$l->jabatan_akademik}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
@endsection

@section('modal')
@foreach ($lecturers as $l)
<div class="modal fade" id="modal-{{$l->id}}" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-label">Hapus Dosen {{$l->nama}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yaking ingin menghapus <b>Dosen {{$l->nama}}</b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <form action="{{route('lecturers.destroy', $l->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Ya, hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
