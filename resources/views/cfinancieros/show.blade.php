@extends('layouts.theme.app')

@section('title', 'Ver Centro Financiero')
@section('title2', 'Detalle')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div class="form-group mb-3">
        <label class="fw-bold">Código Centro Financiero:</label>
        <div>{{ $cfinanciero->cfinanciero }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Nombre:</label>
        <div>{{ $cfinanciero->nombre }}</div>
    </div>

    <div class="form-group text-end mt-4">
        <a href="{{ route('cfinancieros.index') }}" class="btn btn-secondary btn-sm">Volver al listado</a>
        <a href="{{ route('cfinancieros.edit', $cfinanciero) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
</div>
@endsection
