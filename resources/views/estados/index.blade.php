@extends('layouts.theme.app')
@section('title', 'Estados')
@section('title2','Indice')

@section('content')    

<div class="widget-content widget-content-area  mt-2 mb-2">
    <div class="">
        <a href="{{ route('estados.create') }}" class="btn btn-primary btn-sm mt-2 mb-2">
            <i class="fas fa-plus"></i> Crear Estado
        </a>
    </div>  


    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Tabla de Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $estado)
                <tr>
                    <td>{{ $estado->id }}</td>
                    <td>{{ $estado->nombre }}</td>
                    <td>{{ $estado->descripcion }}</td>
                    <td>{{ $estado->tabla_referencia }}</td>
                    
                    <td>   
                        <a href="{{ route('estados.show', $estado) }}" class="btn btn-sm btn-outline-primary" title="Ver">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('estados.edit', $estado) }}" class="btn btn-sm btn-outline-warning" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>


                        <form action="{{ route('estados.destroy', $estado) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('¿Está seguro de eliminar este Centro de Costos?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
