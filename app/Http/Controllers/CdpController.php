<?php

namespace App\Http\Controllers;

use App\Models\Cdp;
use Illuminate\Http\Request;
use App\Http\Requests\CdpRequest;

class CdpController extends Controller
{
    public function index()
    {
        $cdps = Cdp::latest()->paginate(10);
        return view('cdps.index', compact('cdps'));
    }

    public function create()
    {
        return view('cdps.create');
    }

    public function store(CdpRequest $request)
    {
        Cdp::create($request->validated());
        return redirect()->route('cdps.index')->with('success', 'CDP creado exitosamente.');
    }

    public function show(Cdp $cdp)
    {
        return view('cdps.show', compact('cdp'));
    }

    public function edit(Cdp $cdp)
    {
        return view('cdps.edit', compact('cdp'));
    }

    public function update(CdpRequest $request, Cdp $cdp)
    {
        $cdp->update($request->validated());
        return redirect()->route('cdps.index')->with('success', 'CDP actualizado exitosamente.');
    }

    public function destroy(Cdp $cdp)
    {
        $cdp->delete();
        return redirect()->route('cdps.index')->with('success', 'CDP eliminado exitosamente.');
    }
}
