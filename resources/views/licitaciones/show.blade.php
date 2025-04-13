@extends('layouts.theme.app')

@section('title', 'Ver Licitación')
@section('title2', 'Detalle de Licitación')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">

    <div class="form-group mb-3">
        <label class="fw-bold">Número de Licitación:</label>
        <div>{{ $licitacion->numero_licitacion }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Nombre:</label>
        <div>{{ $licitacion->nombre }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Descripción:</label>
        <div>{{ $licitacion->descripcion ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Estado:</label>
        <div>{{ $licitacion->estado ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Tipo:</label>
        <div>{{ $licitacion->tipo ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Unidad de Compra:</label>
        <div>{{ $licitacion->unidad_compra ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Monto Total Estimado:</label>
        <div>{{ $licitacion->monto_total_estimado ? number_format($licitacion->monto_total_estimado, 2, ',', '.') : '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Número de Ofertas Recibidas:</label>
        <div>{{ $licitacion->numero_ofertas_recibidas ?? '-' }}</div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Fecha de Publicación:</label>
     
        <div>{{ $licitacion->fecha_publicacion ? \Carbon\Carbon::parse($licitacion->fecha_publicacion)->format('d-m-Y') : '-' }}</div>

    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Fecha de Adjudicación:</label>
        {{-- <div>{{ $licitacion->fecha_adjudicacion ? $licitacion->fecha_adjudicacion->format('d-m-Y') : '-' }}</div> --}}
        <div>{{ $licitacion->fecha_adjudicacion ? \Carbon\Carbon::parse($licitacion->fecha_adjudicacion)->format('d-m-Y') : '-' }}</div>

    </div>

    <div class="form-group text-end mt-4">
        <a href="{{ route('licitaciones.index') }}" class="btn btn-secondary btn-sm">Volver al listado</a>
        <a href="{{ route('licitaciones.edit', $licitacion) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
</div>
@endsection
