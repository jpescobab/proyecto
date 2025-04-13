@extends('layouts.theme.app')

@section('title', 'Clientes Medidores')
@section('title2', 'Editar')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-4">
    <form action="{{ route('clientesmedidores.update', $clienteMedidor) }}" method="POST">
        @csrf
        @method('PUT')
        @include('clientesmedidores.partials.form')

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('clientesmedidores.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
