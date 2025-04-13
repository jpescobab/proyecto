@extends('layouts.theme.app')

@section('title', 'Editar Item')
@section('title2', 'Modificar Registro')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    @include('partials.alerts')

    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="item">Código del Item</label>
            <input type="text" name="item" id="item"
                   class="form-control" value="{{ $item->item }}" readonly>
        </div>

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   class="form-control @error('nombre') is-invalid @enderror"
                   value="{{ old('nombre', $item->nombre) }}" maxlength="50" required>
            @error('nombre')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3"
                      class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion', $item->descripcion) }}</textarea>
            @error('descripcion')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group text-end">
            <a href="{{ route('items.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </form>
</div>
@endsection
