@extends('layouts.theme.app')

@section('content')
<div class="container">
    <h2 class="mt-4 mb-4">Dashboard - Resumen Mensual</h2>

    <div class="row">
        <!-- Gráfico combinado -->
        <div class="col-md-12">
            <div id="chart-combined"></div>
        </div>
    </div>
</div>

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

        // Configuración del gráfico combinado
        var optionsCombined = {
            chart: {
                type: 'line',
                height: 400,
                stacked: false
            },
            stroke: {
                width: [0, 4] // Ancho de las líneas (0 para barras, 4 para línea)
            },
            series: [
                {
                    name: "Monto Total",
                    type: "area",
                    data: totalMontos
                },
                {
                    name: "Cantidad de Facturas",
                    type: "column",
                    data: cantidadDtes
                }
            ],
            xaxis: {
                categories: meses
            },
            yaxis: [
                {
                    title: {
                        text: "Monto Total ($)", // Eje principal (izquierdo)
                    }
                },
                {
                    opposite: true,
                    title: {
                        text: "Cantidad de Facturas" // Eje secundario (derecho)
                    }
                }
            ],
            colors: ['#1b55e2', '#e7515a'],
            tooltip: {
                shared: true,
                intersect: false
            },
            legend: {
                position: "top"
            }
        };

        // Renderizar el gráfico
        var chartCombined = new ApexCharts(document.querySelector("#chart-combined"), optionsCombined);
        chartCombined.render();

    } catch (error) {
        console.error("Error al cargar los gráficos: ", error);
    }
});
</script>
@endsection
