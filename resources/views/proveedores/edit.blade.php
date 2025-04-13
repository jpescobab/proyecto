@extends('layouts.theme.app')

@section('title', 'Editar Proveedor')
@section('title2', 'Modificar Registro')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    @include('proveedores.partials.alerts')

    <form action="{{ route('proveedores.update', $proveedor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="rutproveedor">RUT</label>
                    <input type="text" name="rutproveedor" id="rutproveedor"
                           class="form-control" value="{{ $proveedor->rutproveedor }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre"
                           class="form-control @error('nombre') is-invalid @enderror"
                           value="{{ old('nombre', $proveedor->nombre) }}" maxlength="100" required>
                    @error('nombre')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo"
                           class="form-control @error('correo') is-invalid @enderror"
                           value="{{ old('correo', $proveedor->correo) }}" maxlength="100" required>
                    @error('correo')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion"
                           class="form-control @error('direccion') is-invalid @enderror"
                           value="{{ old('direccion', $proveedor->direccion) }}" maxlength="100" required>
                    @error('direccion')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="contacto">Contacto (opcional)</label>
                    <input type="text" name="contacto" id="contacto"
                           class="form-control @error('contacto') is-invalid @enderror"
                           value="{{ old('contacto', $proveedor->contacto) }}" maxlength="50">
                    @error('contacto')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="imagen">Imagen / Archivo (URL o nombre)</label>
                    <input type="text" name="imagen" id="imagen"
                           class="form-control @error('imagen') is-invalid @enderror"
                           value="{{ old('imagen', $proveedor->imagen) }}" maxlength="255">
                    @error('imagen')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group text-end">
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </form>
</div>
@endsection
