<?php

namespace App\Http\Controllers;

use App\Models\ClienteMedidor;
use App\Models\Proveedor;
use App\Models\Ccosto;
use Illuminate\Http\Request;

class ClienteMedidorController extends Controller
{
    public function index()
    {
        
        $clientesmedidores = ClienteMedidor::with(['proveedor', 'ccosto'])->get();
        return view('clientesmedidores.index', compact('clientesmedidores'));
    }

    public function create()
    {
        $proveedores = Proveedor::all();
        $ccostos = Ccosto::all();
        return view('clientesmedidores.create', compact('proveedores', 'ccostos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numerocliente' => 'required|string|max:20|unique:clientesmedidores,numerocliente',
            'medidor'       => 'nullable|string|max:20',
            'rutproveedor'  => 'required|string|exists:proveedores,rutproveedor',
            'ccosto'        => 'required|string|exists:ccostos,ccosto',
            'tipo'          => 'required|string|max:50',
            'tarifa'        => 'required|in:Normal,Calefaccion',
            'vigente'       => 'boolean',
        ]);

        ClienteMedidor::create($validated);
        return redirect()->route('clientesmedidores.index')->with('success', 'Cliente Medidor creado exitosamente.');
    }

    public function show(ClienteMedidor $clienteMedidor)
    {
        $clientesmedidores = ClienteMedidor::with(['proveedor', 'ccosto'])->get();

        return view('clientesmedidores.show', compact('clienteMedidor'));
    }

    public function edit(ClienteMedidor $clienteMedidor)
    {
        $proveedores = Proveedor::all();
        $ccostos = Ccosto::all();
        return view('clientesmedidores.edit', compact('clienteMedidor', 'proveedores', 'ccostos'));
    }

    public function update(Request $request, ClienteMedidor $clienteMedidor)
    {
        $validated = $request->validate([
            'medidor'       => 'nullable|string|max:20',
            'rutproveedor'  => 'required|string|exists:proveedores,rutproveedor',
            'ccosto'        => 'required|string|exists:ccostos,ccosto',
            'tipo'          => 'required|string|max:50',
            'tarifa'        => 'required|in:Normal,Calefaccion',
            'vigente'       => 'boolean',
        ]);

        $clienteMedidor->update($validated);
        return redirect()->route('clientesmedidores.index')->with('success', 'Cliente Medidor actualizado correctamente.');
    }

    public function destroy(ClienteMedidor $clienteMedidor)
    {
        $clienteMedidor->delete();
        return redirect()->route('clientesmedidores.index')->with('success', 'Cliente Medidor eliminado.');
    }
}
