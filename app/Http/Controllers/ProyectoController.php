<?php

namespace App\Http\Controllers;

use App\Models\Cfinanciero;
use App\Models\Estado;
use App\Models\Proyecto;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    
    public function create()
{
    $centrosFinancieros = Cfinanciero::all();
    $estados = Estado::all();
    return view('proyectos.create', compact('centrosFinancieros', 'estados'));
}

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proyecto' => 'required|string|max:255',
            'descripcion' => 'required',
            'codigo' => 'required|string|max:255|unique:proyectos',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date',
            'avance' => 'nullable|integer|min:0|max:100',
            'monto_estimado' => 'required|numeric',
            'monto_asignado' => 'required|numeric',
            'cfinanciero_id' => 'required|exists:cfinancieros,id',
            'estado_id' => 'required|exists:estados,id',
        ]);

        Proyecto::create($validatedData);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }

    
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    
    public function edit(Proyecto $proyecto)
{
    $centrosFinancieros = Cfinanciero::all();
    $estados = Estado::all();
    return view('proyectos.edit', compact('proyecto', 'centrosFinancieros', 'estados'));
}

    
    public function update(Request $request, Proyecto $proyecto)
    {
        $validatedData = $request->validate([
            'proyecto' => 'required|string|max:255',
            'descripcion' => 'required',
            'codigo' => 'required|string|max:255|unique:proyectos,codigo,' . $proyecto->id,
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date',
            'avance' => 'nullable|integer|min:0|max:100',
            'monto_estimado' => 'required|numeric',
            'monto_asignado' => 'required|numeric',
            'cfinanciero_id' => 'required|exists:cfinancieros,id',
            'estado_id' => 'required|exists:estados,id',
        ]);

        $proyecto->update($validatedData);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
