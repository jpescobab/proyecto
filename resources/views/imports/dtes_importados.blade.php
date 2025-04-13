@extends('layouts.theme.app')
@section('title', 'DTEs Importados')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div class="card">
        <div class="card-header bg-primary text-white">
            DTEs Importados
        </div>
        <div class="card-body">

            <!-- Mostrar mensajes -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <h2>Listado de DTEs Importados</h2>

            @if ($dtes->isEmpty())
                <p class="alert alert-warning">No hay datos importados.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Número DTE</th>
                            <th>Rut Emisor</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Egreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtes as $dte)
                            <tr>
                                <td>{{ $dte->id }}</td>
                                <td>{{ $dte->NumeroDte }}</td>
                                <td>{{ $dte->RutEmisor }}</td>
                                <td>{{ $dte->Fecha }}</td>
                                <td>{{ $dte->Monto }}</td>
                                <td>{{ $dte->Egreso }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <a href="{{ route('dtes.index') }}" class="btn btn-secondary">Volver al Listado</a>

        </div>
    </div>
</div>
@endsection
