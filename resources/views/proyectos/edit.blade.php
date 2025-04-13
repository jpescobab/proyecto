@extends('layouts.theme.app')

@section('title', 'Proyectos')
@section('title2', 'Actualizar')

@section('content')
    <div class="container">
        <h1>Editar Proyecto</h1>
        <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
            @csrf
            @method('PUT')
            @include('proyectos.form')
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
