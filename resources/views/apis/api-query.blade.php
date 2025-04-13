@extends('layouts.theme.app')

@section('title', 'Consulta Ordenes de Compras')

@section('styles')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
@endsection

@section('content')
<div class="container mt-4">
    <div class="form-group">
        <label for="codigo">Código de Orden de Compra:</label>
        <input type="text" id="codigo" class="form-control" placeholder="Ingrese el código">
    </div>
    <button id="fetchDataButton" class="btn btn-primary mt-2">Obtener Datos</button>

 
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Orden de Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Los datos de la API se mostrarán aquí -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
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
        const url = `https://api.mercadopublico.cl/servicios/v1/publico/ordenesdecompra.json?codigo=${codigo}&ticket=${ticket}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.Listado && data.Listado.length > 0) {
                    const order = data.Listado[0];
                    displayResultInModal(order);
                } else {
                    displayErrorInModal('No existe el registro buscado.');
                }
            })
            .catch(error => {
                console.error('Hubo un problema con la petición Fetch:', error);
                displayErrorInModal('Error al consultar la API.');
            });
    });

    function displayResultInModal(order) {
        const modalBody = document.getElementById('modalBody');
        modalBody.innerHTML = `
            <div>
                <h5>Información del Registro</h5>
                <p><strong>Código:</strong> ${order.Codigo}</p>
                <p><strong>Nombre:</strong> ${order.Nombre}</p>
                <p><strong>Estado:</strong> ${order.Estado}</p>
                <p><strong>Descripción:</strong> ${order.Descripcion}</p>
                <p><strong>Tipo Moneda:</strong> ${order.TipoMoneda}</p>
                <p><strong>Total Neto:</strong> ${order.TotalNeto}</p>
            </div>`;
        $('#resultModal').modal('show');
    }

    function displayErrorInModal(message) {
        const modalBody = document.getElementById('modalBody');
        modalBody.innerHTML = `<div class="alert alert-danger">${message}</div>`;
        $('#resultModal').modal('show');
    }
</script>
@endsection
