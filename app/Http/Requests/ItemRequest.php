<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ajusta según permisos
    }

    public function rules(): array
    {
        return [
            'item' => 'required|string|unique:items,item,' . $this->id,
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'item.required' => 'El campo ítem es obligatorio.',
            'item.unique' => 'El ítem ya existe.',
            'nombre.required' => 'El nombre es obligatorio.',
        ];
    }
}
