@extends('admin.layout.principal')

@section('contenido')
@if(Session::has('status'))
    <div class="col-md-12 alert-section">
        <div class="alert alert-{{ Session::get('status_type') }}" style="text-align: center; padding: 5px; margin-bottom: 5px;">
            <span style="font-size: 20px; font-weight: bold;">
                {{ Session::get('status') }}
                @php Session::forget('status'); @endphp
            </span>
        </div>
    </div>
@endif

<style>
    input.form-control,
    select.form-control,
    textarea.form-control {
        color: #000; 
        background-color: #fff; 
    }
</style>

<div class="card">
    <div class="card-header">
        <!-- Puedes agregar un título si quieres -->
    </div>
    <div class="card-body">
        <div class="row">

        {!! Form::open(['route' => 'aviso.store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'form-aviso']) !!}

            <div class="col-lg-12 col-sm-12 col-12">
               <fieldset>
                   <legend>Insertar un nuevo aviso</legend>
                   <div class="row">
                       <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTText('titulo', 'Título del aviso', 'Título del aviso a registrar', old('titulo'), $errors, 255, true) !!}
                       </div>
                    
                       <div class="col-lg-12 col-sm-12 col-12">
                            {!! Form::UTText('descripcion', 'Descripción', 'Descripción detallada del aviso', old('descripcion'), $errors, 500, true) !!}
                       </div>
                       <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTCalendar('fecha_publicacion', 'Fecha de Publicación', 'Fecha en que se publica el aviso', old('fecha_publicacion'), $errors, true) !!}
                       </div>
                       <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTCalendar('fecha_expiracion', 'Fecha de Expiración', 'Fecha en que expira el aviso (opcional)', old('fecha_expiracion'), $errors, false) !!}
                       </div>
                       <div class="col-lg-12 col-sm-12 col-12">
                           <div class="form-group">
                               <div class="form-line" style="border: none!important;">
                                   <label for="imagen" class="form-label"> Solo se aceptan fechas en el formato <code>AAAA-MM-DD</code>(ejemplo 2025-06-01)</label>
                                   <input id="imagen" class="form-control" title="Imagen del aviso a registrar" name="imagen" type="file" accept="image/jpeg, image/png">
                                   <div class="row">
                                       <div>
                                           <label style="font-weight: normal; font-size: small; padding: 1rem;">
                                               <strong>1.-</strong> Formato (*.png, *.jpg).
                                           </label>
                                       </div>
                                       <div>
                                           <label style="font-weight: normal; font-size: small; padding: 1rem;">
                                               <strong>2.-</strong> Tamaño máximo 400 x 400 pixeles.
                                           </label>
                                       </div>
                                       <div>
                                           <label style="font-weight: normal; font-size: small; padding: 1rem;">
                                               <strong>3.-</strong> Peso máximo del archivo 200 KB.
                                           </label>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           @if ($errors->has('imagen'))
                               <span class="help-block">
                                    <strong style="color: darkred;">{{ $errors->first('imagen') }}</strong>
                                </span>
                           @endif
                       </div>
                   </div>
                   <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                   <a href="{{ route('aviso.index') }}" class="btn btn-dark">Cancelar</a>
               </fieldset>
            </div>

        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
