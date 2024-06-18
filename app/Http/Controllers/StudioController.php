<?php

namespace App\Http\Controllers;

use App\Models\Studio;

use Illuminate\Http\Request;

class StudioController extends Controller
{
   
    public function index()
    {
        $studios = Studio::all();
        // dd($studios);
        return view('studio.index',  compact('studios'));
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }
    
    public function edit(string $id)
    {
        //
    }
    
    public function update(Request $request, string $id)
    {
        //
    }
    
    public function destroy(string $id)
    {
        //
    }
}
