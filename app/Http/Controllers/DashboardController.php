<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dtes;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los datos para la vista
        $dtes = Dtes::all();
// dd($dtes);
        // Obtener los meses y cantidad de documentos por mes
        $meses = Dtes::selectRaw("DATE_FORMAT(FechaRecepcionSII, '%Y-%m') as mes")
            ->groupBy('mes')
            ->orderBy('mes')
            ->pluck('mes');

        $cantidadDtes = Dtes::selectRaw("DATE_FORMAT(FechaRecepcionSII, '%Y-%m') as mes, COUNT(*) as cantidad")
            ->groupBy('mes')
            ->orderBy('mes')
            ->pluck('cantidad');

        // Obtener el total de montos por mes
        $totalMontos = Dtes::selectRaw("DATE_FORMAT(FechaRecepcionSII, '%Y-%m') as mes, SUM(Monto) as total")
            ->groupBy('mes')
            ->orderBy('mes')
            ->pluck('total');

        // Obtener totales agrupados por tipo de documento
        $documentosPorTipo = Dtes::selectRaw('TipoDcto, COUNT(*) as total')
            ->groupBy('TipoDcto')
            ->get();

        return view('dashboard.index', compact('dtes', 'meses', 'cantidadDtes', 'totalMontos', 'documentosPorTipo'));
    }
}
