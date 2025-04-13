<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParidadUf;

class ParidadUfController extends Controller
{
    public function getPorFecha($fecha)
    {
        $valor = ParidadUf::where('fecha', $fecha)->value('valor');

        return response()->json([
            'fecha' => $fecha,
            'valor' => $valor ?? 0,
        ]);
    }
}
