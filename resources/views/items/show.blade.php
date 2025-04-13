@extends('layouts.theme.app')

@section('title', 'Ver Item')
@section('title2', 'Detalle')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div class="form-group mb-3">
        <label class="fw-bold">Código del Item:</label>
        <div>{{ $item->item }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Nombre:</label>
        <div>{{ $item->nombre }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Descripción:</label>
        <div>{{ $item->descripcion ?? '-' }}</div>
    </div>

    <div class="form-group text-end mt-4">
        <a href="{{ route('items.index') }}" class="btn btn-secondary btn-sm">Volver al listado</a>
        <a href="{{ route('items.edit', $item) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
</div>
@endsection
