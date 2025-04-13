@extends('layouts.theme.app')
@section('title', 'Estados')
@section('title2','Actualizar')

@section('content')
   
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Actualizar Estado
        </div>
        <div class="card-body">
            <form action="{{ route('estados.update', $estado) }}" method="POST">
                @csrf
                @method('PUT')
                @include('estados.form')
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('estados.index') }}" class="btn btn-warning">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection
