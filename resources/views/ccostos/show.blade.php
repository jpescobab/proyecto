@extends('layouts.theme.app')

@section('title', 'Ver Centro de Costo')
@section('title2', 'Detalle')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div class="form-group mb-3">
        <label class="fw-bold">Código Centro de Costo:</label>
        <div>{{ $ccosto->ccosto }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Nombre:</label>
        <div>{{ $ccosto->nombre }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Centro Financiero Asociado:</label>
        <div>
            {{ $ccosto->cfinanciero->cfinanciero ?? 'N/A' }} - 
            {{ $ccosto->cfinanciero->nombre ?? 'Sin asignar' }}
        </div>
    </div>

    <div class="form-group text-end mt-4">
        <a href="{{ route('ccostos.index') }}" class="btn btn-secondary btn-sm">Volver al listado</a>
        <a href="{{ route('ccostos.edit', $ccosto) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
</div>
@endsection
