<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Muestra una lista de los recursos.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Guarda un recurso recién creado en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rut' => 'required|string|max:10|unique:proveedores',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'contacto' => 'nullable|string|max:255',
            'imagen' => 'nullable|string|max:255',
        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor creado correctamente.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Actualiza el recurso especificado en la base de datos.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'rut' => 'required|string|max:10|unique:proveedores,rut,' . $proveedor->id,
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'contacto' => 'nullable|string|max:255',
            'imagen' => 'nullable|string|max:255',
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor actualizado correctamente.');
    }

    /**
     * Elimina el recurso especificado de la base de datos.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor eliminado correctamente.');
    }


    public function profile()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.profile', compact('proveedores'));
    }

}
