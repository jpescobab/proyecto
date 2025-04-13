@extends('layouts.theme.app')

@section('title', 'Consulta API Mercado Público')

@section('styles')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
@endsection

@section('content')
<div class="widget-content widget-content-area br-6 mt-2 mb-2">
    <h1>Consulta API Mercado Público</h1>
    <div class="form-group">
        <label for="codigo">Código de Licitación:</label>
        <input type="text" id="codigo" class="form-control" placeholder="Ingrese el código">
    </div>
    <button id="fetchDataButton" class="btn btn-primary mt-2">Obtener Licitación</button>

    <!-- Spinner de carga -->
    <div id="loadingSpinner" class="text-center mt-3" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden"></span>
        </div>
        <p>Cargando información...</p>
    </div>

    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Licitación</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Los datos de la API se mostrarán aquí -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('fetchDataButton').addEventListener('click', function () {
        const codigo = document.getElementById('codigo').value;
        const ticket = 'F8537A18-6766-4DEF-9E59-426B4FEE2844';
        const url = `https://api.mercadopublico.cl/servicios/v1/publico/licitaciones.json?codigo=${codigo}&ticket=${ticket}`;
        const loadingSpinner = document.getElementById('loadingSpinner');
        const fetchDataButton = document.getElementById('fetchDataButton');

        // Mostrar spinner y deshabilitar el botón
        loadingSpinner.style.display = 'block';
        fetchDataButton.disabled = true;

        fetch(url, {
                method: 'GET',
                headers: {
                    'Pragma': 'no-cache',
                    'Cache-Control': 'no-cache'
                }
            })

        .then(response => response.json())
        .then(data => {
            loadingSpinner.style.display = 'none';
            fetchDataButton.disabled = false;

            if (data && data.Listado && data.Listado.length > 0) {
                const order = data.Listado[0];
                displayResultInModal(order);
            } else {
                displayErrorInModal('No existe el registro buscado.');
            }
        })
        .catch(error => {
            loadingSpinner.style.display = 'none';
            fetchDataButton.disabled = false;
            console.error('Hubo un problema con la petición Fetch:', error);
            displayErrorInModal('Error al consultar la API.');
        });
    });

    function displayResultInModal(order) {
        const modalBody = document.getElementById('modalBody');
        modalBody.innerHTML = ''; // Limpia el contenido previo
        modalBody.innerHTML = `
            <h5>Información completa del Registro:</h5>
            <pre>${JSON.stringify(order, null, 2)}</pre>`;
        $('#resultModal').modal('show');
    }

    function displayErrorInModal(message) {
        const modalBody = document.getElementById('modalBody');
        modalBody.innerHTML = ''; // Limpia el contenido previo
        modalBody.innerHTML = `<div class="alert alert-danger">${message}</div>`;
        $('#resultModal').modal('show');
    }
</script>
@endsection
