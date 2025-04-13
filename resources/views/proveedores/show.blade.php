@extends('layouts.theme.app')

@section('title', 'Ver Proveedor')
@section('title2', 'Detalle')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">

    <div class="form-group mb-3">
        <label class="fw-bold">RUT:</label>
        <div>{{ $proveedor->rutproveedor }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Nombre:</label>
        <div>{{ $proveedor->nombre }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Correo:</label>
        <div>{{ $proveedor->correo }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Dirección:</label>
        <div>{{ $proveedor->direccion }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Contacto:</label>
        <div>{{ $proveedor->contacto ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Imagen / Archivo:</label>
        <div>{{ $proveedor->imagen ?? '-' }}</div>
    </div>

    <div class="form-group text-end mt-4">
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary btn-sm">Volver al listado</a>
        <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
</div>
@endsection
