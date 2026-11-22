@extends('admin.layout.principal')

@section('contenido')
@if(Session::has('status'))
    <div class="col-md-12 alert-section">
        <div class="alert alert-{{Session::get('status_type')}}" style="text-align: center; padding: 5px; margin-bottom: 5px;">
            <span style="font-size: 20px; font-weight: bold;">
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
        <h3>Carrito de Compras</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Seleccionar</th>
                                <th style="width:15%;">Imagen</th>
                                <th style="width:20%;">Nombre</th>
                                <th style="width:10%;">Cantidad</th>
                                <th style="width:25%;">Precio Unitario</th>
                                <th style="width:10%;">Total</th>
                                <th style="width:10%;">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalPagar = 0;
                            @endphp
                            @foreach($lista as $row)
                            @php
                                $subtotal = $row->cantidad * $row->precioUnitario;
                                $totalPagar += $subtotal;
                            @endphp
                            <tr>
                                <td style="text-align:center">
                                    <input type="checkbox" class="producto-checkbox" data-total={{$subtotal}} data-id="{{$row->id}}">
                            </td>
                                <td>
                                    <img src="{{URL::asset('admin/uploads/productos').'/'.$row->carrito_producto->imagen}}" style="width: 8em; height: 100%;">
                                </td>
                                <td>{{$row->carrito_producto->nombre}}</td>
                                <td>{{$row->cantidad}}</td>
                                <td>$ {{ number_format($row->precioUnitario, 2) }}</td>
                                <td>$ {{ number_format($subtotal, 2)}}</td>
                                <td>
                                    <form action="{{ route('carrito.eliminar', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center justify-content-center" style="gap: 5px; font-weight: bold; border-radius: 5px;">
                                        Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-lg-12 text-right">
            {!! Form::open(['route' => 'carrito.comprar', 'method' => 'post', 'class' => 'container-fluid']) !!}
            <input type="hidden" name="productos_seleccionados" id="productosSeleccionados">
            <input type="hidden" name="total" id="totalInput">
                <h4><strong>Total a pagar: $ <span id="total">0.00</span></strong></h4>

                <button type="submit" class="btn btn-success d-flex align-items-center justify-content-center" style="gap: 5px; font-weight: bold; border-radius: 5px; padding: 10px 15px;">
                    <i class="mdi mdi-credit-card"></i> Pagar
                </button>
                <br>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_custom')
<script>
    document.addEventListener("DOMContentLoaded", function () {
    let total = 0;
    const totalElement = document.getElementById("total");
    const checkboxes = document.querySelectorAll(".producto-checkbox");
    const totalInput = document.getElementById("totalInput");
    const productosInput = document.getElementById("productosSeleccionados");

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            let precio = parseFloat(this.dataset.total);
            let productoId = this.dataset.id;
            let seleccionados = JSON.parse(productosInput.value || "[]");

            if (this.checked) {
                total += precio;
                seleccionados.push(productoId);
            } else {
                total -= precio;
                seleccionados = seleccionados.filter(id => id !== productoId);
            }

            totalElement.textContent = total.toFixed(2);
            totalInput.value = total.toFixed(2);
            productosInput.value = JSON.stringify(seleccionados);
        });
    });
});
</script>
@endsection