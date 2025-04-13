@extends('layouts.theme.app')

@section('title', 'Proyectos')
@section('title2', 'Detalle')

@section('content')
    <div class="container">
        <h1>Detalles del Proyecto</h1>
        <div class="card">
            <div class="card-header">
                Proyecto: {{ $proyecto->proyecto }}
            </div>
            <div class="card-body">
                <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
                <p><strong>Código:</strong> {{ $proyecto->codigo }}</p>
                <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
                <p><strong>Fecha de Término:</strong> {{ $proyecto->fecha_termino }}</p>
                <p><strong>Avance:</strong> {{ $proyecto->avance }}%</p>
                <p><strong>Monto Estimado:</strong> ${{ number_format($proyecto->monto_estimado, 2) }}</p>
                <p><strong>Monto Asignado:</strong> ${{ number_format($proyecto->monto_asignado, 2) }}</p>
                <p><strong>Centro Financiero:</strong> {{ $proyecto->centroFinanciero->nombre ?? 'N/A' }}</p>
                <p><strong>Estado:</strong> {{ $proyecto->estado->nombre ?? 'N/A' }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver a la Lista</a>
                <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
