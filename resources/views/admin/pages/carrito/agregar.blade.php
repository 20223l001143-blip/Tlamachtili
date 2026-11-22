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
    </div>
    <div class="card-body">
        {!!Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}
        {!! Form::UTHidden('producto', $pro->id) !!}
        {!! Form::UTHidden('precio', $pro->precioPublico) !!}
        <div class="row">
            <div class="card-body" style="display:flex;">
                <div class="col-6 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{$pro->nombre}}</h3>
                    <img src="{{URL::asset('admin/uploads/productos').'/'.$pro->imagen}}" class="product-image" alt="Product Image" style="width: 20rem;padding: 2rem;">
                    <br>
                    <div class="form-line">
                        <label class="form-label">Cantidad requerida<span class="required" style="color:red!important;">&nbsp;<strong>*</strong></span></label>
                        <input required="" id="cantidad_compra" class="form-control" title="Cantidad para comprar" maxlength="5" name="cantidad_compra" type="text" value="1"> 
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <h3 class="my-3">{{$pro->nombre}}</h3>
                    <p>{{$pro->descripcion}}</p>
                    <hr>
                    <h4>Presentación</h4><label>{{$pro->presentacion}}</label>
                    <h4>Piezas disponibles</h4><label>{{$pro->cantidadDisponible}}</label>
                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            ${{$pro->precioPublico}}
                        </h2>
                        <h4 class="mt-0">
                            <small>{{$pro->presentacion}}</small>
                        </h4>
                    </div>
                    <div class="mt-4">
                        <!-- Botón de añadir al carrito -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg" style="border-radius: 12px; padding: 10px; background-color: #48c9b0; border: none; font-size: 16px;">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i> Añadir al carrito
                            </button>
                        </div>
                        <!-- Botón de retornar -->
                        <div class="d-grid gap-2 mt-2">
                            <a href="{{route('carrito.index')}}" class="btn btn-primary btn-lg" style="border-radius: 12px; padding: 10px; background-color: #3498db; color: white; font-size: 16px;">
                                <i class="fas fa-arrow-alt-circle-left fa-lg mr-2"></i> Retornar
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {!!Form::close() !!}
    </div>
</div>
@endsection

@section('js_custom')
<script type="text/javascript">
    const existencia = {!! json_encode($pro) !!};
    console.log(existencia['cantidadDisponible']);
    jQuery(document).ready(function(){
        // Listen for the input event.
        jQuery("#cantidad_compra").on('input', function (evt) {
            // Allow only numbers.
            jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
            if(jQuery(this).val() > existencia['cantidadDisponible']){
                $('#cantidad_compra').val(existencia['cantidadDisponible']);
            }
        });
    });
</script>
@endsection
