<?php

namespace App\Http\Controllers;

use App\Models\Cfinanciero;
use Illuminate\Http\Request;

class CfinancieroController extends Controller
{
    public function index()
    {
        $cfinancieros = Cfinanciero::all();
        return view('cfinancieros.index', compact('cfinancieros'));
    }

    public function create()
    {
        return view('cfinancieros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cfinanciero' => 'required|unique:cfinancieros,cfinanciero',
            'nombre' => 'required|string|max:255',
        ]);

        Cfinanciero::create($request->all());
        return redirect()->route('cfinancieros.index')->with('success', 'Centro financiero creado exitosamente.');
    }

    public function show(Cfinanciero $cfinanciero)
    {
        return view('cfinancieros.show', compact('cfinanciero'));
    }

    public function edit(Cfinanciero $cfinanciero)
    {
        return view('cfinancieros.edit', compact('cfinanciero'));
    }

    public function update(Request $request, Cfinanciero $cfinanciero)
    {
        $request->validate([
            'cfinanciero' => 'required|unique:cfinancieros,cfinanciero,' . $cfinanciero->cfinanciero . ',cfinanciero',
            'nombre' => 'required|string|max:255',
        ]);

        $cfinanciero->update($request->all());
        return redirect()->route('cfinancieros.index')->with('success', 'Centro financiero actualizado exitosamente.');
    }

    public function destroy(Cfinanciero $cfinanciero)
    {
        $cfinanciero->delete();
        return redirect()->route('cfinancieros.index')->with('success', 'Centro financiero eliminado exitosamente.');
    }
}
