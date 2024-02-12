@extends('staffing::app', [
    'title' => 'Manajemen Data Unit',
    'pageTitle' => 'Manajemen Data Unit'
])

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success mb-2">{{ Session::get('success') }}</div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger mb-2">{{ Session::get('error') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">Tabel Data Unit</h5>
                </div>
                <div class="col">
                    <a
                        href="{{ route('staffing.unit.create') }}"
                        class="btn icon icon-left btn-success float-end">
                        <i class="bi bi-plus"></i>
                        Tambah Unit
                    </a>
                </div>
            </div>
            <hr>
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