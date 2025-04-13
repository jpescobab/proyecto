@extends('layouts.theme.app')

@section('content')
<div class="main-container" id="container">
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard Documentos Tributarios</h3>
            </div>
            <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Sales</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                    <a class="dropdown-item" data-value="<span>Show</span> : Daily Sales" href="javascript:void(0);">Daily Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Weekly Sales" href="javascript:void(0);">Weekly Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Monthly Sales" href="javascript:void(0);">Monthly Sales</a>
                    <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                    <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Revenue</h5>
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent"> 
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div>
               

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Documentos Tributarios Electronicos</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><div class="th-content">Id ReFlow</div></th>
                                        <th><div class="th-content">Tipo</div></th>
                                        <th><div class="th-content">Numero</div></th>
                                        <th><div class="th-content th-heading">Monto</div></th>
                                        <th><div class="th-content">Estado</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Andy King</div></td>
                                        <td><div class="td-content product-brand">Nike Sport</div></td>
                                        <td><div class="td-content">#76894</div></td>
                                        <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

          

        </div>              

    </div>
</div>
<!--  END CONTENT PART  -->

</div>
@endsection
@section('scripts')
<!-- Cargar ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    try {
        // Convertir JSON a objetos JavaScript válidos
        var meses = JSON.parse('{!! json_encode($meses) !!}');
        var cantidadDtes = JSON.parse('{!! json_encode($cantidadDtes) !!}');
        var totalMontos = JSON.parse('{!! json_encode($totalMontos) !!}');

        console.log("Meses:", meses);
        console.log("Cantidad DTEs:", cantidadDtes);
        console.log("Total Montos:", totalMontos);

        // Manejo de valores vacíos
        if (!Array.isArray(meses) || meses.length === 0) meses = ["Sin datos"];
        if (!Array.isArray(cantidadDtes) || cantidadDtes.length === 0) cantidadDtes = [0];
        if (!Array.isArray(totalMontos) || totalMontos.length === 0) totalMontos = [0];

        /*
            =================================
                Revenue Monthly | Options
            =================================
        */
        var options1 = {
            chart: {
                fontFamily: 'Nunito, sans-serif',
                height: 365,
                type: 'line',
                zoom: { enabled: false },
                dropShadow: {
                    enabled: true,
                    opacity: 0.3,
                    blur: 5,
                    left: -7,
                    top: 22
                },
                toolbar: { show: false }
            },
            colors: ['#1b55e2', '#e7515a'],
            dataLabels: { enabled: false },
            stroke: { width: [3, 3], curve: 'smooth' },
            series: [
                { name: "Monto Total ($)", type: "area", data: totalMontos },
                { name: "Cantidad de Facturas", type: "column", data: cantidadDtes }
            ],
            labels: meses,
            xaxis: {
                axisBorder: { show: false },
                axisTicks: { show: false },
                crosshairs: { show: true },
                labels: {
                    offsetX: 0,
                    offsetY: 5,
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Nunito, sans-serif',
                        cssClass: 'apexcharts-xaxis-title',
                    },
                }
            },
            yaxis: [
                {
                    title: { text: "Monto Total ($)" }
                },
                {
                    opposite: true,
                    title: { text: "Cantidad de Facturas" }
                }
            ],
            grid: {
                borderColor: '#e0e6ed',
                strokeDashArray: 5,
                xaxis: { lines: { show: true } },
                yaxis: { lines: { show: false } },
                padding: { top: 0, right: 0, bottom: 0, left: -10 },
            },
            legend: {
                position: "top",
                horizontalAlign: "right",
                offsetY: -50,
                fontSize: '16px',
                fontFamily: 'Nunito, sans-serif',
                markers: {
                    width: 10, height: 10, strokeWidth: 0, strokeColor: '#fff',
                    radius: 12, offsetX: 0, offsetY: 0
                },
                itemMargin: { horizontal: 0, vertical: 20 }
            },
            tooltip: {
                shared: true,
                intersect: false
            }
        };

        /*
            ================================
                Revenue Monthly | Render
            ================================
        */
        var chart1 = new ApexCharts(document.querySelector("#revenueMonthly"), options1);
        chart1.render();

    } catch (error) {
        console.error("Error al cargar los gráficos: ", error);
    }
});
</script>
@endsection


