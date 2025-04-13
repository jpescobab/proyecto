@extends('layouts.theme.app')
@section('title', 'Importar')
@section('title2','Dtes')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Importar Documentos Tributarios Electronicos
        </div>
        <div class="card-body">
        <div class="container mt-5">     
        <form action="{{ route('dtes.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file" class="form-label">Seleccionar Archivo Excel</label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Importar</button>
        </form>
    </div>
        </div>
    </div>
</div>
@endsection
