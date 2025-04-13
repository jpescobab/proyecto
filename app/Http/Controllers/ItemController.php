<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required|string|max:10|unique:items,item',
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item creado exitosamente.');
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        $item->update($request->only('nombre', 'descripcion'));

        return redirect()->route('items.index')->with('success', 'Item actualizado exitosamente.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item eliminado exitosamente.');
    }
}
