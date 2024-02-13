<?php

namespace Modules\Inventory\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'unit_id' => 'required|exists:units,id',
            'type' => 'required|in:IT,SARPRAS',
            'owners' => 'required_if:type,IT|array',
            'owners.*' => 'exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Mohon isikan nama barang terlebih dahulu!',
            'unit_id.required' => 'Mohon pilih unit dimana barang berada!',
            'unit_id.exists' => 'Data unit tidak ada!',
            'type.required' => 'Mohon pilih tipe tipe inventaris terlebih dahulu!',
            'type.in' => 'Nilai tipe harus diantara IT dan SARPRAS!',
            'owners.required_id' => 'Mohon pilih pengguna barang terlebih dahulu!',
            'owners.array' => 'Mohon kirim berupa nilai array!',
            'owners.*.exists' => 'Data pegawai tidak ditemukan!',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
