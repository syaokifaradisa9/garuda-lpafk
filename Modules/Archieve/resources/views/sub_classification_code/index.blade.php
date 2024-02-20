@extends('archieve::app', [
    'title' => 'Manajemen Data Sub Kode Arsip',
    'pageTitle' => 'Manajemen Data Sub Kode Arsip'
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
                    <h5 class="card-title">Tabel Data Sub Kode Arsip</h5>
                </div>
                <div class="col">
                    <a
                        href=""
                        class="btn icon icon-left btn-success float-end">
                        <i class="bi bi-plus"></i>
                        Tambah Sub Kode Arsip
                    </a>
                </div>
            </div>
            <hr>
        </div>
        <div class="card-body">
            {!! $dataTable->table() !!}
        </div>
    </div>
@endsection