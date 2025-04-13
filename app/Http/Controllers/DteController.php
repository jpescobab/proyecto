<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DtesImport;
use App\Models\Dtes;
use Illuminate\Support\Facades\Session;

class DteController extends Controller
{
    /**
     * Muestra la lista de DTEs.
     */
    public function index()
    {
        $dtes = Dtes::all();
        return view('dtes.index', compact('dtes'));
    }

    /**
     * Muestra el formulario de importación.
     */
    public function showImportForm()
    {
        return view('imports.import');
    }

    /**
     * Maneja la importación del archivo Excel.
     */
    public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls|max:2048'
    ], [
        'file.required' => 'Debe seleccionar un archivo.',
        'file.mimes' => 'El archivo debe ser de tipo Excel (.xlsx o .xls).',
        'file.max' => 'El archivo no debe exceder los 2MB.'
    ]);

    try {
        Excel::import(new DtesImport, $request->file('file'));

        // Guardar mensaje en la sesión
        Session::flash('success', 'Importación completada con éxito.');

        // Redirigir a la vista de DTEs importados
        return redirect()->route('dtes.importados');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Hubo un error al importar el archivo: ' . $e->getMessage());
    }
}

public function dtesImportados()
{
    $dtes = Dtes::all();

    return view('imports.dtes_importados', compact('dtes'));
}



public function importarDtes(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new DtesImport, $request->file('archivo'));

        return redirect()->route('dtes.importados');
    }




}
