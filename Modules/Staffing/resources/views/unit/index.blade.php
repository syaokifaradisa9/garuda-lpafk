@extends('staffing::app', [
    'title' => 'Manajemen Data Unit',
    'pageTitle' => 'Manajemen Data Unit'
])

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Tabel Data Unit</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Unit</th>
                        <th>Jumlah Pegawai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection