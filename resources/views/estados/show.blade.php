@extends('layouts.theme.app')
@section('title', 'Estados')
@section('title2','Detalle')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Detalle Estado
        </div>
        <div class="card-body">
                <p><strong>Descripción:</strong> {{ $estado->descripcion }}</p>
                <p><strong>Tabla de Referencia:</strong> {{ $estado->tabla_referencia }}</p>
            </div>
            <div class="card-footer">                
                <a href="{{ route('estados.index') }}" class="btn btn-secondary">Volver a la Lista</a>  
            </div>
        </div>
    </div>
@endsection



