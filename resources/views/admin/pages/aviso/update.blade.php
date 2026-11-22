@extends('admin.layout.principal')

@section('contenido')
@if(Session::has('status'))
    <div class="col-md-12 alert-section">
        <div class="alert alert-{{ Session::get('status_type') }}" style="text-align: center; padding: 5px; margin-bottom: 5px;">
            <span style="font-size: 20px; font-weight: bold;">
                {{ Session::get('status') }}
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
            <h4 class="card-title">Actualizar registro del aviso</h4>
            {!! Form::model($aviso, ['route' => ['aviso.update', $aviso->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
            
            <div class="col-lg-12 col-sm-12 col-12">
                <fieldset>
                    <legend>Insertar nuevos datos</legend>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTText('titulo', 'Título del aviso', 'Título del aviso a registrar', $aviso->titulo, $errors, 100, true) !!}
                        </div>
                       
                        <div class="col-lg-12 col-sm-12 col-12">
                            {!! Form::UTText('descripcion', 'Descripción del aviso', 'Descripción detallada del aviso', $aviso->descripcion, $errors, 1000, true) !!}
                        </div>
                         <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTCalendar('fecha_publicacion', 'Fecha de Publicación', 'Fecha en que se publica el aviso', old('fecha_publicacion'), $errors, true) !!}
                       </div>
                       <div class="col-lg-6 col-sm-6 col-6">
                            {!! Form::UTCalendar('fecha_expiracion', 'Fecha de Expiración', 'Fecha en que expira el aviso (opcional)', old('fecha_expiracion'), $errors, false) !!}
                       </div>
                        <div class="col-lg-6 col-sm-6 col-6" style="padding-bottom: 2rem;">
                            @if($aviso->imagen)
                                <img src="{{ URL::asset('admin/uploads/avisos/' . $aviso->imagen) }}" style="width: 12em; height: 100%;">
                            @else
                                Sin imagen
                            @endif
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="form-line" style="border: none!important;">
                                    <label for="img" class="form-label">Cambiar imagen del aviso</label>
                                    <input id="img" class="form-control" title="Imagen del aviso a registrar" name="img" type="file" accept="image/jpeg, image/png">
                                    <div class="row">
                                        <div>
                                            <label style="font-weight: normal; font-size: small; padding: 1rem;"><strong>1.-</strong> Formato (*.png, *.jpg).</label>
                                        </div>
                                        <div>
                                            <label style="font-weight: normal; font-size: small; padding: 1rem;"><strong>2.-</strong> El tamaño máximo 400 x 400 pixeles.</label>
                                        </div>
                                        <div>
                                            <label style="font-weight: normal; font-size: small; padding: 1rem;"><strong>3.-</strong> El peso máximo del archivo 200 Kb.</label>
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
                    <a href="{{ route('aviso.index') }}" class="btn btn-dark">Cancelar</a>
                </fieldset>
            </div>
            
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('js_custom')
    <script src="{{ asset('admin/js/validatorFields.js') }}"></script>
@endsection
