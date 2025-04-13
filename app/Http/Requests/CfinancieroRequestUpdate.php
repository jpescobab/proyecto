<?php

namespace App\Http\Requests;

use App\Models\Cfinanciero;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;


class CfinancieroRequestUpdate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'codigo' => 'required|string|max:255|unique:cfinancieros,codigo',
            'codigo' => 'required|max:255|unique:cfinancieros,codigo,' .$this->route('cfinanciero')->id,
            'nombre' => 'required|string|max:255',
        ];
    }
}

