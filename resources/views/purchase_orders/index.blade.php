@extends('layouts.theme.app')

@section('title', 'Consulta Órdenes de Compra')

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <div class="form-group">
        <label for="codigo">Código de Orden de Compra:</label>
        <input type="text" id="codigo" class="form-control" placeholder="Ingrese el código">
    </div>
    <button id="fetchDataButton" class="btn btn-primary mt-2">Obtener Datos</button>

    <!-- Spinner de carga -->
    <div id="loadingSpinner" class="text-center mt-3" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden"></span>
        </div>
        <p>Cargando información...</p>
    </div>

    <!-- Resultado -->
    <div id="result" class="mt-3"></div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('fetchDataButton').addEventListener('click', function () {
        const codigo = document.getElementById('codigo').value;
        const resultDiv = document.getElementById('result');
        const loadingSpinner = document.getElementById('loadingSpinner');

        resultDiv.innerHTML = ''; // Limpiar resultado previo
        loadingSpinner.style.display = 'block'; // Mostrar spinner

        fetch('/api/ordenesdecompra', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ codigo }),
        })
        .then(response => response.json())
        .then(data => {
            loadingSpinner.style.display = 'none'; // Ocultar spinner

            if (data.message) {
                resultDiv.innerHTML = `<div class='alert alert-danger'>${data.message}</div>`;
            } else {
                resultDiv.innerHTML = `
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Orden de Compra</h5>
                            <p><strong>Código:</strong> ${data.codigo}</p>
                            <p><strong>Proveedor:</strong> ${data.nombre_proveedor}</p>
                            <p><strong>Fecha:</strong> ${data.fecha_emision}</p>
                            <p><strong>Monto Neto:</strong> $${data.monto_neto}</p>
                            <p><strong>IVA:</strong> $${data.iva}</p>
                            <p><strong>Monto Total:</strong> $${data.monto_total}</p>
                            <p><strong>Estado:</strong> ${data.estado}</p>
                            <h6>Detalle de Productos:</h6>
                            <pre>${JSON.stringify(JSON.parse(data.detalle_productos || '[]'), null, 2)}</pre>
                        </div>
                    </div>`;
            }
        })
        .catch(error => {
            loadingSpinner.style.display = 'none'; // Ocultar spinner
            console.error('Error:', error);
            resultDiv.innerHTML = `<div class='alert alert-danger'>Error al consultar la API.</div>`;
        });
    });
</script>
@endsection
