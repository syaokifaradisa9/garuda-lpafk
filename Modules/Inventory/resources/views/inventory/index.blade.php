@extends('inventory::app', [
    'title' => 'Manajemen Data Inventaris',
    'pageTitle' => 'Manajemen Data Inventaris'
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
                    <h5 class="card-title">Tabel Data Inventaris</h5>
                </div>
                <div class="col">
                    <a
                        href="{{ route('inventory.master.create') }}"
                        class="btn icon icon-left btn-success float-end">
                        <i class="bi bi-plus"></i>
                        Tambah Inventaris
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

@section('extends_scripts')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.btn-delete', function(event){
                event.preventDefault();
                var userId = $(this).attr('id');
                
                confirmAlert(
                    "Konfirmasi Hapus Data",
                    "Yakin menghapus data?",
                    async function(){
                        console.log(`${window.location.href}/${userId}/delete`);
                        const response = await fetch(
                            `${window.location.href}/${userId}/delete`,
                            {
                                method: "GET",
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            }
                        );
            
                        const json = await response.json();
                        Swal.fire({icon: json.status, title: json.title, text: json.message});
                        if(json.status == 'success'){
                            $('#user-datatable').DataTable().ajax.reload();
                        }
                    }
                );
            });
        });
    </script>
@endsection