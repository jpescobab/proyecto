<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
   
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index', compact('estados'));
    }

    
    public function create()
    {
        return view('estados.create');
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tabla_referencia' => 'nullable|string|max:255',
        ]);

        Estado::create($validatedData);

        return redirect()->route('estados.index')->with('success', 'Estado creado exitosamente.');
    }

    
    public function show(Estado $estado)
    {
        return view('estados.show', compact('estado'));
    }

    
    public function edit(Estado $estado)
    {
        return view('estados.edit', compact('estado'));
    }

   
    public function update(Request $request, Estado $estado)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tabla_referencia' => 'nullable|string|max:255',
        ]);

        $estado->update($validatedData);

        return redirect()->route('estados.index')->with('success', 'Estado actualizado exitosamente.');
    }

    
    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index')->with('success', 'Estado eliminado exitosamente.');
    }
}
