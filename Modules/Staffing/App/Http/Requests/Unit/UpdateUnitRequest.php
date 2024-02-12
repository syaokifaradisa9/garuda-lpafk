<?php

namespace Modules\Staffing\App\Http\Requests\Unit;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:units,name,' . $this->id,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'mohon isikan nama unit terlebih dahulu!',
            'name.unique' => 'nama unit sudah terdaftar!',
        ];
    }
}
