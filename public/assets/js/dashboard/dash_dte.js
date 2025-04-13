document.addEventListener("DOMContentLoaded", function() {
    try {
        // Convertir JSON a objetos JavaScript válidos
        var meses = JSON.parse('{!! json_encode($meses) !!}');
        var cantidadDtes = JSON.parse('{!! json_encode($cantidadDtes) !!}');
        var totalMontos = JSON.parse('{!! json_encode($totalMontos) !!}');
        var documentosPorTipo = JSON.parse('{!! json_encode($documentosPorTipo) !!}');

        console.log("Meses:", meses);
        console.log("Cantidad DTEs:", cantidadDtes);
        console.log("Total Montos:", totalMontos);
        console.log("Documentos por Tipo:", documentosPorTipo);

        // Gráfico de línea (Evolución Mensual)
        var options1 = {
            chart: {
                type: 'line',
                height: 365,
                zoom: { enabled: false },
                toolbar: { show: false }
            },
            colors: ['#1b55e2', '#e7515a'],
            dataLabels: { enabled: false },
            stroke: { width: [3, 3], curve: 'smooth' },
            series: [
                { name: "Monto Total ($)", type: "area", data: totalMontos },
                { name: "Cantidad de DTEs", type: "column", data: cantidadDtes }
            ],
            labels: meses,
            xaxis: {
                categories: meses,
            },
            yaxis: [
                { title: { text: "Monto Total ($)" } },
                { opposite: true, title: { text: "Cantidad de DTEs" } }
            ],
        };
        var chart1 = new ApexCharts(document.querySelector("#revenueMonthly"), options1);
        chart1.render();

        // Gráfico de Donut (Totales por Tipo de Documento)
        var tipos = documentosPorTipo.map(doc => doc.TipoDcto);
        var totales = documentosPorTipo.map(doc => doc.total);
        
        var options2 = {
            chart: {
                type: 'donut',
                width: 380
            },
            labels: tipos,
            series: totales,
            colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
            legend: {
                position: 'bottom'
            }
        };
        var chart2 = new ApexCharts(document.querySelector("#chart-2"), options2);
        chart2.render();
    } catch (error) {
        console.error("Error al cargar los gráficos: ", error);
    }
});
