@extends('layouts.theme.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}} ">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}} ">


<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_html5.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_html5.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollspyNav.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tables/table-basic.css')}}">
@endsection

@section('title', 'dtes')
@section('title2', 'Indice')



@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Documentos Tributarios</h3>
                </div>
            </div>

            
            <!-- Tabla de Documentos Tributarios -->
            <div class="row mt-4">
                <div class="col-xl-12">
                    <div class="widget widget-table-one">                       
                        <table id="html5-extension" class="table table-hover table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="font-weight: bold; font-size: 0.8em;">Url</th>    
                                    <th style="font-weight: bold; font-size: 0.8em;">Red Flow</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Fecha SII</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Tipo</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Número</th>                                    
                                    <th style="font-weight: bold; font-size: 0.8em;">Rut</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Emisor</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Monto</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Estado</th>
                                    <th style="font-weight: bold; font-size: 0.8em;">Egreso</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dtes as $dte)
                                    <tr>
                                        <td>
                                            <a href="{{$dte->Url}}" class="rounded bs-tooltip" target="_blank" title="Ver PDF"><i class="fa-solid fa-file-invoice-dollar"></i></a>   
                                        </td>
                                        <td style="text-align: center; font-size: 0.8em; width: 10px;">{{ $dte->idRedFlow}}</td>
                                        <td style="text-align: right; font-size: 0.8em">{{ \Carbon\Carbon::parse($dte->FechaRecepcionSII)->format('d/m/Y') }}</td>
                                        <td style="text-align: center; font-size: 0.8em">{{ $dte->TipoDcto }}</td>
                                        <td style="text-align: right; font-size: 0.8em">{{ $dte->NumeroDte }}</td>   
                                        <td style="text-align: right; font-size: 0.8em; width: 100px;">{{$dte->RutEmisor}}</td>
                                        <td style="text-align: left; font-size: 0.8em">{{$dte->NombreEmisor}}</td>
                                        <td style="font-weight: bold; text-align: right; font-size: 0.8em">${{ number_format($dte->Monto, 0) }}</td>
                                        <td style="text-align: left; font-size: 0.8em">{{$dte->Estado}}</td>
                                        <td style="text-align: left; font-size: 0.8em">{{$dte->Egreso}}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
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

