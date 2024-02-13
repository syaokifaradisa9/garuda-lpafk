@extends('inventory::app', [
    'title' => 'Manajemen Data Inventaris',
    'pageTitle' => 'Manajemen Data Inventaris'
])

@php
    $cardTitle = URLHelper::has('edit') ? 'Form Edit Inventaris' : 'Form Tambah Inventaris';
    $formUrl = URLHelper::has('edit') ? route('inventory.master.update', ['id' => $inventory['id']]) : route('inventory.master.store');
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
                    <h6>Nama Barang</h6>
                    <input
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        placeholder="Masukkan Nama Barang"
                        value="{{ old('name') ?? $inventory['name'] ?? '' }}">
                    @error('name')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="w-100 mt-4">
                    <h6>Unit</h6>
                    <fieldset class="form-group">
                        <select id="inventory-unit-form" class="form-select @error('unit_id') is-invalid @enderror" name="unit_id">
                            <option value="" hidden>Pilih unit barang berada</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}"
                                    @if((old('unit_id') ?? $inventory['unit_id'] ?? '') == $unit->id )
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

                @php
                    $types = [
                        [
                            'label' => 'IT',
                            'value' => 'IT'
                        ],[
                            'label' => 'Sarana dan Prasarana',
                            'value' => 'SARPRAS'   
                        ]
                    ];
                @endphp 
                <div class="w-100 mt-4">
                    <h6>Tipe</h6>
                    <fieldset class="form-group">
                        <select class="form-select @error('type') is-invalid @enderror" name="type" id='inventory-type-form'>
                            <option value="" hidden>Pilih tipe</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['value'] }}"
                                    @if((old('type') ?? $inventory['type'] ?? '') == $type['value'])
                                        selected
                                    @endif>
                                    {{ $type['label'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('type')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>

                <div class="w-100 mt-4" id="inventory-sharing-form">
                    <h6>Pengguna Barang</h6>
                    <small class="text-danger">
                        Pilih siapa saja yang menggunakan barang tersebut
                    </small>
                    <p class="d-none" id="old-value-owner">
                        {{ implode('|', old('owners') ?? $inventory['owners'] ?? []) }}
                    </p>
                    <div class="form-group pt-2" id="inventory_sharing-checkbox">
                        
                    </div>
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

@section('extends_scripts')
    <script>
        $(document).ready(function(){
            // Custom Event Untuk Mempopulasikan pengguna barang sesuai unit
            $(document).on('populateUserByUnitEvent', async function(e, unitId){
                var host = window.location.origin;
                var users = await fetch(`${host}/staffing/user/getByUnit?unit_id=${unitId}`);
                var users = await users.json();
                
                var options = '';
                var data = users.data;

                var oldDataId = [];
                var oldValueElement = $('#old-value-owner')[0];
                if(oldValueElement.innerHTML){
                    oldDataId = oldValueElement.innerHTML.trim();
                    if(oldDataId.includes('|')){
                        oldDataId = oldDataId.split('|');
                    }else{
                        oldDataId = [oldDataId];
                    }
                }

                for(var i = 0; i < data.length; i++){
                    var statusSelected = oldDataId.includes(String(data[i]['id']));

                    options += `
                        <div class="form-check">
                            <div class="checkbox">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    name="owners[]"
                                    value="${data[i]['id']}"
                                    ${ statusSelected ? "checked" : "" }>
                                <label for="checkbox1">${data[i]['name']}</label>
                            </div>
                        </div>
                    `;
                }

                $('#inventory_sharing-checkbox')[0].innerHTML = options;
            });

            // Inisialisasi
            if($('#inventory-type-form').val() !== 'IT'){
                $('#inventory-sharing-form').hide();
            }

            if($('#inventory-unit-form').val()){
                var unitId = $('#inventory-unit-form').val();
                $(document).trigger('populateUserByUnitEvent', [unitId]);
            }  

            // Event Perubahan Dropdown Tipe Inventaris
            $('#inventory-type-form').on('change', function(evt){
                if(evt.target.value == 'IT'){
                    $('#inventory-sharing-form').show();
                }else{
                    $('#inventory-sharing-form').hide();
                }
            });

            // Event Perubahan Dropdown Unit
            $('#inventory-unit-form').on('change', function(evt){
                $(document).trigger('populateUserByUnitEvent', [evt.target.value]);
            });
        });
    </script>
@endsection