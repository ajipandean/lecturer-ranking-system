@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-dark">Peringkat Dosen</h4>
                        </div>

                        <div class="card-body p-0">
                            @if (sizeof($lecturers) == 0)
                            <div class="empty-state">
                                <div class="empty-state-icon"><i class="fas fa-folder-open"></i></div>
                                <h2>Data dosen kosong</h2>
                                <p class="lead">Silakah tambahkan data dosen untuk melihat daftar hasil peringkat</p>
                                <a href="{{route('lecturers.create')}}" class="btn btn-primary">Tambah dosen</a>
                            </div>
                            @else
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <thead>
                                        <tr>
                                            <th>Peringkat</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($lecturers as $l)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$l->nik}}</td>
                                            <td>{{$l->nama}}</td>
                                            <td>31,34</td>
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
    </div>
</div>
@endsection
