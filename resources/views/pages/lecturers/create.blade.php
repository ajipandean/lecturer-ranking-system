@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('lecturers.store')}}" method="POST">
                        @csrf
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
                                            <input required name="nik" type="number" class="form-control @error('nik') is-invalid @enderror" value="{{old('nik')}}" id="nik">
                                            @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input required name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" id="nama">
                                            @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="section-title my-3">Data Kriteria</div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="penilaian-mahasiswa">Penilaian Mahasiswa</label>
                                            <input required name="penilaian_mahasiswa" type="number" class="form-control @error('penilaian_mahasiswa') is-invalid @enderror" value="{{old('penilaian_mahasiswa')}}" id="penilaian-mahasiswa">
                                            @error('penilaian_mahasiswa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="penilaian-dosen">Penilaian Dosen</label>
                                            <input required name="penilaian_dosen" type="number" class="form-control @error('penilaian_dosen') is-invalid @enderror" value="{{old('penilaian_dosen')}}" id="penilaian-dosen">
                                            @error('penilaian_dosen')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="penilaian-atasan">Penilaian Atasan</label>
                                            <input required name="penilaian_atasan" type="number" class="form-control @error('penilaian_atasan') is-invalid @enderror" value="{{old('penilaian_atasan')}}" id="penilaian-atasan">
                                            @error('penilaian_atasan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="kualifikasi-pendidikan">Kualifikasi Pendidikan</label>
                                            <select required name="kualifikasi_pendidikan" id="kualifikasi-pendidikan" class="form-control @error('kualifikasi_pendidikan') is-invalid @enderror" value="{{old('kualifikasi_pendidikan')}}">
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @error('kualifikasi_pendidikan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-penelitian">Banyaknya Penelitian</label>
                                            <input required name="penelitian" type="number" class="form-control @error('penelitian') is-invalid @enderror" value="{{old('penelitian')}}" id="banyaknya-penelitian">
                                            @error('penelitian')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="banyaknya-jurnal">Banyaknya Jurnal</label>
                                            <input required name="jurnal" type="number" class="form-control @error('jurnal') is-invalid @enderror" value="{{old('jurnal')}}" id="banyaknya-jurnal">
                                            @error('jurnal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-pelatihan">Banyaknya Pelatihan</label>
                                            <input required name="pelatihan" type="number" class="form-control @error('pelatihan') is-invalid @enderror" value="{{old('pelatihan')}}" id="banyaknya-pelatihan">
                                            @error('pelatihan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-seminar">Banyaknya Seminar</label>
                                            <input required name="seminar" type="number" class="form-control @error('seminar') is-invalid @enderror" value="{{old('seminar')}}" id="banyaknya-seminar">
                                            @error('seminar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="banyaknya-pengabdian-masyarakat">Banyaknya Pengabdian Masyarakat</label>
                                            <input required name="pengabdian_masyarakat" type="number" class="form-control @error('pengabdian_masyarakat') is-invalid @enderror" value="{{old('pengabdian_masyarakat')}}" id="banyaknya-pengabdian-masyarakat">
                                            @error('pengabdian_masyarakat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="jabatan-akademik">Jabatan Akademik</label>
                                            <select required name="jabatan_akademik" id="jabatan-akademik" class="form-control @error('jabatan_akademik') is-invalid @enderror" value="{{old('jabatan_akademik')}}">
                                                <option value="Asisten Ahli">Asisten Ahli</option>
                                                <option value="Rektor">Rektor</option>
                                                <option value="Pengajar">Pengajar</option>
                                                <option value="Guru Besar">Guru Besar</option>
                                            </select>
                                            @error('jabatan_akademik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-link">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
