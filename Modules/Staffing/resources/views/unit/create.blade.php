@extends('staffing::app', [
    'title' => 'Manajemen Data Unit',
    'pageTitle' => 'Manajemen Data Unit'
])

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Form Tambah Unit
            </h5>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ route('staffing.unit.store') }}" method="post">
                @csrf

                <div class="w-100">
                    <h6>Nama Unit</h6>
                    <input
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan Nama Unit">
                    @error('name')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn icon icon-left btn-success float-end" style="margin-left: 8px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z"/>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                        </svg>
                        Simpan
                    </button>
                    <a 
                        href="{{ route('staffing.unit.index') }}"
                        class="btn icon icon-left btn-secondary float-end">
                        <i class="bi bi-chevron-left"></i>
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection