@extends('layouts.theme.app')

@section('title', 'Editar Centro de Costo')
@section('title2', 'Modificar Registro')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    @include('partials.alerts')

    <form action="{{ route('ccostos.update', $ccosto) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="ccosto">Código Centro de Costo</label>
            <input type="text" name="ccosto" id="ccosto"
                   class="form-control @error('ccosto') is-invalid @enderror" 
                   value="{{ old('ccosto', $ccosto->ccosto) }}" maxlength="10" readonly>
            @error('ccosto')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   class="form-control @error('nombre') is-invalid @enderror" 
                   value="{{ old('nombre', $ccosto->nombre) }}" maxlength="150" required>
            @error('nombre')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="cfinanciero">Centro Financiero</label>
            <select name="cfinanciero" id="cfinanciero" class="form-control @error('cfinanciero') is-invalid @enderror" required>
                <option value="">Seleccione...</option>
                @foreach ($cfinancieros as $cf)
                    <option value="{{ $cf->cfinanciero }}" 
                        {{ old('cfinanciero', $ccosto->cfinanciero) == $cf->cfinanciero ? 'selected' : '' }}>
                        {{ $cf->cfinanciero }} - {{ $cf->nombre }}
                    </option>
                @endforeach
            </select>
            @error('cfinanciero')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group text-end">
            <a href="{{ route('ccostos.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </form>
</div>
@endsection
