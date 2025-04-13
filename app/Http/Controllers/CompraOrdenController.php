<?php

namespace App\Http\Controllers;

use App\Models\CompraOrden;
use App\Models\CompraOrdenFecha;
use App\Models\CompraOrdenProveedor;
use App\Models\Comprador;
use App\Models\CompraOrdenItem;
use Illuminate\Http\Request;

class CompraOrdenController extends Controller
{
    /**
     * Muestra una lista de las órdenes de compra.
     */
    public function index()
    {
        $ordenes = CompraOrden::with(['fechas', 'proveedor', 'comprador', 'items'])->get();
        return response()->json($ordenes);
    }

    /**
     * Muestra una orden de compra específica.
     */
    public function show($id)
    {
        $orden = CompraOrden::with(['fechas', 'proveedor', 'comprador', 'items'])->findOrFail($id);
        return response()->json($orden);
    }

    /**
     * Crea una nueva orden de compra.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codigo' => 'required|unique:compras_ordenes,codigo',
            'cantidad' => 'required|integer',
            'fecha_creacion' => 'required|date',
            'version' => 'required|string',
            'codigo_estado' => 'required|integer',
            'estado' => 'required|string',
            'descripcion' => 'required|string',
            'codigo_tipo' => 'required|string',
            'tipo' => 'required|string',
            'tipo_moneda' => 'required|string',
            'codigo_estado_proveedor' => 'required|integer',
            'estado_proveedor' => 'required|string',
            'total_neto' => 'required|numeric',
            'porcentaje_iva' => 'required|numeric',
            'impuestos' => 'required|numeric',
            'total' => 'required|numeric',
            'pais' => 'required|string',
            'tipo_despacho' => 'required|string',
            'forma_pago' => 'required|string',
        ]);

        $orden = CompraOrden::create($validatedData);

        if ($request->has('fechas')) {
            $orden->fechas()->create($request->input('fechas'));
        }

        if ($request->has('proveedor')) {
            $orden->proveedor()->create($request->input('proveedor'));
        }

        if ($request->has('comprador')) {
            $orden->comprador()->create($request->input('comprador'));
        }

        if ($request->has('items')) {
            foreach ($request->input('items') as $item) {
                $orden->items()->create($item);
            }
        }

        return response()->json($orden, 201);
    }

    /**
     * Actualiza una orden de compra existente.
     */
    public function update(Request $request, $id)
    {
        $orden = CompraOrden::findOrFail($id);

        $validatedData = $request->validate([
            'cantidad' => 'integer',
            'fecha_creacion' => 'date',
            'version' => 'string',
            'codigo_estado' => 'integer',
            'estado' => 'string',
            'descripcion' => 'string',
            'codigo_tipo' => 'string',
            'tipo' => 'string',
            'tipo_moneda' => 'string',
            'codigo_estado_proveedor' => 'integer',
            'estado_proveedor' => 'string',
            'total_neto' => 'numeric',
            'porcentaje_iva' => 'numeric',
            'impuestos' => 'numeric',
            'total' => 'numeric',
            'pais' => 'string',
            'tipo_despacho' => 'string',
            'forma_pago' => 'string',
        ]);

        $orden->update($validatedData);

        if ($request->has('fechas')) {
            $orden->fechas()->updateOrCreate(['purchase_order_id' => $orden->id], $request->input('fechas'));
        }

        if ($request->has('proveedor')) {
            $orden->proveedor()->updateOrCreate(['purchase_order_id' => $orden->id], $request->input('proveedor'));
        }

        if ($request->has('comprador')) {
            $orden->comprador()->updateOrCreate(['purchase_order_id' => $orden->id], $request->input('comprador'));
        }

        if ($request->has('items')) {
            foreach ($request->input('items') as $item) {
                $orden->items()->updateOrCreate(['purchase_order_id' => $orden->id, 'codigo_producto' => $item['codigo_producto']], $item);
            }
        }

        return response()->json($orden);
    }

    /**
     * Elimina una orden de compra.
     */
    public function destroy($id)
    {
        $orden = CompraOrden::findOrFail($id);
        $orden->delete();

        return response()->json(['message' => 'Orden de compra eliminada con éxito.']);
    }
}
