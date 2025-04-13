<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dtes;
use Carbon\Carbon;

class ConsultaController extends Controller
{
    public function DtesElectricidad()
   
    {
        // Filtrar los registros donde RutEmisor sea 99.501.280-4
        $dtesElectricidad = Dtes::where('RutEmisor', '88272600-2')
                    ->where('Estado', 'Importado')
                    ->orderBy('Fecha', 'desc')
                    ->get();
      
          //      return response()->json($dtesElectricidad);

       return view('consultas.electricidad.index', compact('dtesElectricidad'));
       
    }

    public function DtesAguaPatagonia()
   
    {
        // Filtrar los registros donde RutEmisor sea 99.501.280-4
        $dtesAguaPatagonia = Dtes::where('RutEmisor', '99501280-4')
                    ->where('Estado', 'Importado')
                    ->orderBy('Fecha', 'desc')
                    ->get();
      
          //      return response()->json($dtesElectricidad);

       return view('consultas.agua.index', compact('dtesAguaPatagonia'));
       
    }


    public function detalleDte($id)
{
    $dte = \App\Models\Dtes::with('detalledtes.cliente')->findOrFail($id);
    return response()->json($dte);
}
}
