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
                                        <tr>
                                            <td>1</td>
                                            <td>432000007</td>
                                            <td>Dani Rohpandi</td>
                                            <td>31,34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
