@extends('layouts.theme.app')

@section('title', 'Clientes Medidores')
@section('title2', 'Crear')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-4">
    <form action="{{ route('clientesmedidores.store') }}" method="POST">
        @csrf
        @include('clientesmedidores.partials.form')

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('clientesmedidores.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
