<?php

namespace Modules\Staffing\App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'unit_id' => 'required|exists:units,id',
            'phone' => 'nullable|digits_between:10,13|numeric',
            'nip' => 'nullable|digits:18|unique:users,nip,' . $this->id,
            'email' => 'required|unique:users,email,' . $this->id,
        ];
    }

    public function messages(){
        return [
            'name.required' => 'mohon isikan nama lengkap pegawai!',
            'unit_id.required' => 'mohon pilih unit terlebih dahulu!',
            'unit_id.exists' => 'data unit tidak ditemukan!',
            'phone.digits_between' => 'mohon isikan nomor telepon sebanyak 10-13 digit!',
            'phone.numeric' => 'mohon isikan nomor telepon berupa bilangan bulat!',
            'nip.unique' => 'NIP sudah pernah terdata!',
            'nip.digits' => 'mohon isikan NIP sebanyak 18 digit!',
            'email.required' => 'mohon isikan email pegawai terlebih dahulu!',
            'email.unique' => 'email sudah pernah terdaftar!',
        ];
    }
}
