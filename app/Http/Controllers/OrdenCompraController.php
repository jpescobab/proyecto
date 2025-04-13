<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index()
    {
        $ordenes = OrdenCompra::with('proveedor')->get();
        return view('ordenescompras.index', compact('ordenes'));
    }

    public function create()
    {
        $proveedores = Proveedor::all();
        return view('ordenescompras.create', compact('proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'orden_compra' => 'required|string|max:13|unique:ordenescompras,orden_compra',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'estado' => 'nullable|string|max:50',
            'unidad_compra' => 'required|string|max:10',
            'proveedor' => 'nullable|string|max:255',
            'rutproveedor' => 'nullable|exists:proveedores,rutproveedor',
            'fecha_creacion' => 'nullable|date',
            'fecha_envio' => 'nullable|date',
            'monto_neto' => 'nullable|numeric|min:0',
            'descuentos' => 'nullable|numeric|min:0',
            'cargos' => 'nullable|numeric|min:0',
            'iva' => 'nullable|numeric|min:0',
            'impuesto_especifico' => 'nullable|numeric|min:0',
            'total' => 'nullable|numeric|min:0',
        ]);

        OrdenCompra::create($request->all());

        return redirect()->route('ordenescompras.index')->with('success', 'Orden de compra creada exitosamente.');
    }

    public function show(OrdenCompra $ordencompra)
    {
        return view('ordenescompras.show', compact('ordencompra'));
    }

    public function edit(OrdenCompra $ordencompra)
    {
        $proveedores = Proveedor::all();
        return view('ordenescompras.edit', compact('ordencompra', 'proveedores'));
    }

    public function update(Request $request, OrdenCompra $ordencompra)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'estado' => 'nullable|string|max:50',
            'unidad_compra' => 'required|string|max:10',
            'proveedor' => 'nullable|string|max:255',
            'rutproveedor' => 'nullable|exists:proveedores,rutproveedor',
            'fecha_creacion' => 'nullable|date',
            'fecha_envio' => 'nullable|date',
            'monto_neto' => 'nullable|numeric|min:0',
            'descuentos' => 'nullable|numeric|min:0',
            'cargos' => 'nullable|numeric|min:0',
            'iva' => 'nullable|numeric|min:0',
            'impuesto_especifico' => 'nullable|numeric|min:0',
            'total' => 'nullable|numeric|min:0',
        ]);

        $ordencompra->update($request->only([
            'nombre', 'tipo', 'estado', 'unidad_compra', 'proveedor',
            'rutproveedor', 'fecha_creacion', 'fecha_envio',
            'monto_neto', 'descuentos', 'cargos', 'iva',
            'impuesto_especifico', 'total',
        ]));

        return redirect()->route('ordenescompras.index')->with('success', 'Orden de compra actualizada exitosamente.');
    }

    public function destroy(OrdenCompra $ordencompra)
    {
        $ordencompra->delete();
        return redirect()->route('ordenescompras.index')->with('success', 'Orden de compra eliminada exitosamente.');
    }
}
