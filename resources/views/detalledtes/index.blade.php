@extends('layouts.theme.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Detalles DTE</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('detalledtes.create') }}" class="btn btn-primary mb-3">Crear Nuevo Detalle</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N° DTE</th>
                <th>RUT Emisor</th>
                <th>Nombre Emisor</th>
                <th>Tipo</th>
                <th>Periodo Consumo</th>
                <th>Lectura Anterior</th>
                <th>Lectura Actual</th>
                <th>Consumo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalles as $detalle)
                <tr>
                    <td>{{ $detalle->dte->NumeroDte ?? 'N/A' }}</td>
                    <td>{{ $detalle->dte->RutEmisor ?? 'N/A' }}</td>
                    <td>{{ $detalle->dte->NombreEmisor ?? 'N/A' }}</td>
                    <td>{{ $detalle->tipo }}</td>
                    <td>{{ $detalle->periodoconsumo }}</td>
                    <td>{{ $detalle->lecturaanterior }}</td>
                    <td>{{ $detalle->lecturaactual }}</td>
                    <td>{{ $detalle->consumo }}</td>
                    <td>
                        <a href="{{ route('detalledtes.show', $detalle->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('detalledtes.edit', $detalle->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('detalledtes.destroy', $detalle->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
