@extends('layouts.theme.app')

@section('title', 'Proyectos')
@section('title2', 'Indice')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
@endsection

@section('title', 'Proyectos')
@section('title2', 'Listado de Proyectos')

@section('content')    
    <div class="widget-content widget-content-area br-6 mt-2 mb-2">
        <div class="">
            <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm mt-2 mb-2">
                <i class="fas fa-plus"></i> Nuevo Proyecto
            </a>
        </div>  
        <table id="default-ordering" class="table table-hover table-striped" style="width:100%">
            <thead>
                <tr>               
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>                  
                    <th>Fecha Inicio</th>
                    <th>Fecha Término</th>
                    <th>Avance</th>
                    <th>Monto Estimado</th>
                    <!-- <th>Monto Asignado</th> -->
                    <th>C.Financiero</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>      
                        <td>{{ $proyecto->codigo }}</td>                 
                        <td>{{ $proyecto->proyecto }}</td>
                        <td>{{ $proyecto->descripcion }}</td>                        
                        <td>{{ $proyecto->fecha_inicio }}</td>
                        <td>{{ $proyecto->fecha_termino }}</td>
                        <td>{{ $proyecto->avance }}%</td>
                        <td>{{ number_format($proyecto->monto_estimado, 0) }}</td>
                        <!-- <td>{{ number_format($proyecto->monto_asignado, 0) }}</td> -->
                        <td>{{ $proyecto->centroFinanciero->nombre ?? 'N/A' }}</td>
                        <td>{{ $proyecto->estado->nombre ?? 'N/A' }}</td>
                        
                        <td>   
                            <a href="{{ route('proyectos.show', $proyecto) }}" class="btn btn-sm btn-outline-primary" title="Ver">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-sm btn-outline-warning" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>


                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="d-inline">
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

@section('scripts')
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>

<script>        
    $('#default-ordering').DataTable({
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Mostrando página _PAGE_ de _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Buscar...",
            "sLengthMenu": "Resultados: _MENU_",
        },
        "order": [[ 3, "desc" ]],
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7,
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-style-13 pagination-bordered mb-5');
        }
    });
</script>
@endsection
