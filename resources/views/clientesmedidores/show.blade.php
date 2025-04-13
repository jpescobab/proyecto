@extends('layouts.theme.app')

@section('title', 'Clientes Medidores')
@section('title2', 'Detalle')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-4">
    <div class="row mb-2">
        <div class="col-md-6">
            <p><strong>Número Cliente:</strong> {{ $clienteMedidor->numerocliente }}</p>
            <p><strong>Medidor:</strong> {{ $clienteMedidor->medidor }}</p>
            <p><strong>Proveedor:</strong> {{ $clienteMedidor->proveedor->nombre ?? '-' }}</p>
            <p><strong>Centro de Costo:</strong> {{ $clienteMedidor->ccosto->nombre ?? '-' }}</p>
        </div>
        <div class="col-md-6">
            <p><strong>Tipo:</strong> {{ $clienteMedidor->tipo }}</p>
            <p><strong>Tarifa:</strong> {{ $clienteMedidor->tarifa }}</p>
            <p><strong>Vigente:</strong> {{ $clienteMedidor->vigente ? 'Sí' : 'No' }}</p>
        </div>
    </div>

    <a href="{{ route('clientesmedidores.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
