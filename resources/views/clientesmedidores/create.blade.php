@extends('layouts.theme.app')

@section('content')
@include('layouts.theme.partials.breadcrumb', ['titulo' => 'Crear Cliente Medidor'])

<div class="container">
    <form action="{{ route('clientesmedidores.store') }}" method="POST">
        @include('clientesmedidores.partials.form')
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('clientesmedidores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
