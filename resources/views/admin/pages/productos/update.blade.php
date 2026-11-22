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

<style>
    input.form-control,
    select.form-control {
        color: #000; 
        background-color: #fff; 
    }
</style>

<div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row">
            <h4 class="card-title">Actualizar registro del producto</h4>
            {!! Form::open([$producto, 'route' => ['producto.update', $producto->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                <div class="col-lg-12 col-sm-12 col-12">
                   <fieldset>
                       <legend>Insertar nuevos datos</legend>
                       <div class="row">
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTText('nombre', 'Nombre del producto', 'Nombre del producto a registrar', $producto->nombre, $errors, 40, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTNumeric('stock', 'Stock del producto', 'Stock del producto a registrar', $producto->cantidadDisponible, $errors, 30, true,null,null,'') !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                               {!! Form::UTNumeric('cminima', 'Cantidad mínima de stock del producto', 'Cantidad mínima de stock del producto a registrar', $producto->cantidadMinima, $errors, 30, true,null,null,'') !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                               {!! Form::UTNumeric('cmaxima', 'Cantidad máxima de stock del producto', 'Cantidad máxima de stock del producto a registrar', $producto->cantidadMaxima, $errors, 30, true,null,null,'') !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTText('descrip', 'Descripción del producto', 'Descripción del producto a registrar', $producto->descripcion, $errors, 500, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTFloat('precio_p', 'Precio Publico', 'Precio del producto', $producto->precioPublico, $errors, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                               {!! Form::UTFloat('precio_m', 'Precio Mayorista', 'Precio Mayorista del producto', $producto->precioMayorista, $errors, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                               {!! Form::UTNumeric('cant_m', 'Cantidad Mayorista', 'Cantidad para otorgar precio mayorista', $producto->cantidadMayorista, $errors, 30, true,null,null,'') !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTText('pres', 'Presentación del producto', 'Presentación del producto a registrar', $producto->presentacion, $errors, 40, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTText('codigo', 'Código del producto', 'Código del producto a registrar', $producto->codigoBarras, $errors, 20, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                                {!! Form::UTList('categoria', 'Categoría', 'Categoría del producto', $categoria, $producto->categoria_id , $errors, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4">
                               {!! Form::UTList('marca', 'Marca', 'Marca del producto', $marca, $producto->marca_id , $errors, true) !!}
                           </div>
                           <div class="col-lg-4 col-sm-4 col-4" style="padding-bottom: 2rem;">
                                <img src="{{URL::asset('admin/uploads/productos').'/'.$producto->imagen}}" style="width: 12em;height: 100%;">
                           </div>
                           <div class="col-lg-8 col-sm-8 col-8">
                               <div class="form-group">
                                   <div class="form-line" style="border: none!important;">
                                       <label for="img" class="form-label">Cambiar imagen del producto</label>
                                       <input id="img" class="form-control" title="Imagen del producto a registrar" name="img" type="file" accept="image/jpeg, image/png">
                                       <div class="row">
                                           <div>
                                               <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>1.-</strong> Formato (*.png, *.jpg).</label>
                                           </div>
                                           <div>
                                               <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>2.-</strong> El tamaño m&aacute;ximo de 400 x 400 pixeles.</label>
                                           </div>
                                           <div>
                                               <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>3.-</strong> El peso m&aacute;ximo del archivo 200 Kb.</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               @if ($errors->has('img'))
                                   <span class="help-block">
                                        <strong style="color: darkred;">{{ $errors->first('img') }}</strong>
                                    </span>
                               @endif
                           </div>
                        </div>
                       <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                       <a href="{{route('producto.index')}}" class="btn btn-dark">Cancelar</a>
                   </fieldset>
                </div>
            {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js_custom')
    <script src="{{asset('admin/js/validatorFields.js')}}"></script>
@endsection()