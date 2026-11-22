@extends('admin.layout.principal')

@section('contenido')
@if(Session::has('status'))
    <div class="col-12 alert-section">
        <div class="alert alert-{{Session::get('status_type')}} text-center p-2 mb-2">
            <span class="fs-5 fw-bold">
                {{Session::get('status')}}
                @php
                    Session::forget('status');
                @endphp
            </span>
        </div>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Pago con PayPal</h3>
    </div>
    <div class="card-body">
        <div class="container">
            <h2 class="text-center">Confirmación de Compra</h2>
            
            <!-- Tabla responsiva -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->carrito_producto->nombre }}</td>
                            <td>${{ number_format($producto->precioUnitario, 2) }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>${{ number_format(($producto->precioUnitario * $producto->cantidad), 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <h3 class="text-end">Total a Pagar: <strong>${{ number_format($total, 2) }}</strong></h3>
            
            <!-- Formulario de pago -->
                <!-- Botones de acción -->
                <div id="sectionCard" class="hidden p-4 bg-gray-100">
                    <div id="paypal-button-container"></div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </div>
    </div>
</div>
@endsection

@section('js_custom')
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&components=buttons,funding-eligibility&buyer-country=DE"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    paypal.Buttons({
        fundingSource: paypal.FUNDING.CARD,
        createOrder: function(data, actions) {
            return actions.order.create({
                application_context: {
                    shipping_preference: "NO_SHIPPING"
                },
                purchase_units: [{
                    amount: {
                        value: "{{ $total }}"
                    }
                }],
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Mostrar mensaje de éxito con SweetAlert
                Swal.fire({
                    title: '¡Pago exitoso!',
                    text: 'Gracias por tu compra, ' + details.payer.name.given_name + '!',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    // Enviar solicitud al servidor para vaciar el carrito
                    fetch("{{ route('carrito.finalizarCompra') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            productos_seleccionados: @json($productos->pluck('id'))
                        })
                    }).then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = "{{ route('carrito.index') }}"; // Redirigir después de vaciar el carrito
                        } else {
                            console.error(data.error);
                        }
                    }).catch(error => console.error("Error al vaciar el carrito:", error));
                });
            });
        },
    }).render('#paypal-button-container');
});
</script>
@endsection