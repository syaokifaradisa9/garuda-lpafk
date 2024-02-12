@extends('staffing::app', [
    'title' => 'Manajemen Data Pegawai',
    'pageTitle' => 'Manajemen Data Pegawai'
])

@php
    $cardTitle = URLHelper::has('edit') ? 'Form Edit Pegawai' : 'Form Tambah Pegawai';
    $formUrl = URLHelper::has('edit') ? route('staffing.user.update', ['id' => $user->id]) : route('staffing.user.store');
@endphp

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success mb-2">{{ Session::get('success') }}</div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger mb-2">{{ Session::get('error') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                {{ $cardTitle }}
            </h5>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ $formUrl }}" method="POST">
                @csrf
                @if(URLHelper::has('edit'))
                    @method('PUT')
                @endif

                <div class="w-100">
                    <h6>Nama Pegawai</h6>
                    <input
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan Nama Lengkap Pegawai"
                        value="{{ old('name') ?? $user->name ?? '' }}">
                    @error('name')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 mt-4">
                    <h6>Nomor Telepon</h6>
                    <input
                        name="phone"
                        class="form-control @error('phone') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan Nomor Telepon Pegawai"
                        value="{{ old('phone') ?? $user->phone ?? '' }}">
                    @error('phone')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 mt-4">
                    <h6>NIP</h6>
                    <input
                        name="nip"
                        class="form-control @error('nip') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan NIP Pegawai"
                        value="{{ old('nip') ?? $user->nip ?? '' }}">
                    @error('nip')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 mt-4">
                    <h6>Unit</h6>
                    <fieldset class="form-group">
                        <select class="form-select @error('unit_id') is-invalid @enderror" name="unit_id">
                            <option value="">Pilih Unit Pegawai</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}"
                                    @if((old('unit_id') ?? $user->unit_id ?? '') == $unit->id )
                                        selected
                                    @endif>
                                    {{ $unit->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('unit_id')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
                <div class="w-100 mt-4">
                    <h6>Email</h6>
                    <input
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan Email Pegawai"
                        value="{{ old('email') ?? $user->email ?? '' }}">
                    @error('email')
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