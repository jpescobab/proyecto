@extends('layouts.theme.app')

@section('title', 'Proyectos')
@section('title2', 'Nuevo')

@section('content')
    <div class="container">
        <h1>Crear Proyecto</h1>
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            @include('proyectos.form')
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
