@extends('layouts.theme.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}} ">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}} ">


<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_html5.css') }}">

<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
<link href="{{asset('assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
  
@endsection

@section('title', 'Consumo Electricidad')
@section('title2', 'Indice')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
        <div class="">
            <a href="#" class="btn btn-primary btn-sm mt-2 mb-2">
                <i class="fas fa-plus"></i> Dashboard
            </a>
        </div>  
 
    <table id="html5-extension" class="table table-hover table-striped" style="width:100%">
        
        <thead class="">
            <tr>             
                <th>IRF</th>
                <th>Numero</th>
                <th>Fecha Recepcion SII</th>
                <th>Periodo</th>
                <th>RutEmisor</th>
                <th>NombreEmisor</th>
                <th>Monto</th>             
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtesElectricidad as $dte)
                <tr>
               
                    <td>{{ $dte->idRedFlow }}</td>
                    {{-- <td>{{ $dte->NumeroDte }}</td>   --}}
                    <td style="font-weight: bold; text-align: right">
                        <a href="{{$dte->Url}}" class="rounded bs-tooltip" target="_blank" title="Ver PDF">{{ $dte->NumeroDte }}</a>   
                    </td>             
                    <td>{{ $dte->FechaRecepcionSII }}</td> 
                    <td>{{ $dte->Periodo }}</td>
                    <td>{{ $dte->RutEmisor }}</td>
                    <td>{{ $dte->NombreEmisor }}</td>                   
                    <td style="font-weight: bold; text-align: right; font-size: 0.8em">${{ number_format($dte->Monto, 0) }}</td>
                                   
                    <td>{{ $dte->Estado }}</td>

                    <td class="text-center">
                        <a href="{{ $dte->Url }}" class="btn btn-sm btn-outline-primary" title="Dte">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </a>
                        
                        <a href="#" class="btn btn-sm btn-outline-warning" title="Detalle">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                        
                    </td>                 
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@section('scripts')
    <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>

    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{asset('plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>  
    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>

    <script>
        $('#html5-extension').DataTable({
            dom: `
                <'row mb-3'
                    <'col-md-3'l>
                    <'col-md-6 text-center'B>
                    <'col-md-3'f>
                >
                <'row'
                    <'col-md-12'tr>
                >
                <'row'
                    <'col-md-5'i>
                    <'col-md-7'p>
                >`,
            buttons: [
                { extend: 'copy', className: 'btn' },
                { extend: 'csv', className: 'btn' },
                { extend: 'excel', className: 'btn' },
                { extend: 'print', className: 'btn' }
            ],
            oLanguage: {
                oPaginate: {
                    sPrevious: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ...></svg>',
                    sNext: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ...></svg>'
                },
                sInfo: "Mostrando página _PAGE_ de _PAGES_",
                sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ...></svg>',
                sSearchPlaceholder: "Buscar...",
                sLengthMenu: "Resultados : _MENU_"
            },
            stripeClasses: [],
            lengthMenu: [10, 20, 50],
            pageLength: 10
        });
    </script>
    
@endsection

