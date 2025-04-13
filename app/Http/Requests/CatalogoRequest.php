<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogoRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Define las reglas de validación.
     */
    public function rules()
    {
        return [
            'catalogo' => 'required|string|unique:catalogos,catalogo|max:255',
            'descripcion' => 'required|string|max:500',
            'item_id' => 'required|exists:items,item',
            'estado' => 'required|in:Activo,Inactivo',
        ];
    }

    /**
     * Define los mensajes personalizados para la validación.
     */
    public function messages()
    {
        return [
            'catalogo.required' => 'El campo catálogo es obligatorio.',
            'catalogo.unique' => 'El catálogo ya existe.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'item_id.required' => 'El item es obligatorio.',
            'item_id.exists' => 'El item seleccionado no es válido.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.in' => 'El estado debe ser Activo o Inactivo.',
        ];
    }
}
