@extends('layouts.theme.app')

@section('title', 'Editar Centro Financiero')
@section('title2', 'Modificar Registro')

@section('content')

@include('partials.alerts')

<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <form action="{{ route('cfinancieros.update', $cfinanciero) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="cfinanciero">Código Centro Financiero</label>
            <input type="text" name="cfinanciero" id="cfinanciero" 
                   class="form-control @error('cfinanciero') is-invalid @enderror" 
                   value="{{ old('cfinanciero', $cfinanciero->cfinanciero) }}" maxlength="4" required readonly>
            @error('cfinanciero')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   class="form-control @error('nombre') is-invalid @enderror" 
                   value="{{ old('nombre', $cfinanciero->nombre) }}" maxlength="50" required>
            @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group text-end">
            <a href="{{ route('cfinancieros.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </form>
</div>
@endsection
