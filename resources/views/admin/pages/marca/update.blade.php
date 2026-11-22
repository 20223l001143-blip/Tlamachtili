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
        <div class="card-body">
            <h4 class="card-title">Actulizar Registro</h4>
            {!!Form::open([$marca,'route' =>['marca.update',$marca->id],'method' => 'put']) !!}
            <div class="form-group">
               {!! Form::UTText('nombre', 'Nombre de la marca', 'Nombre de la marca a registrar', $marca->nombre, $errors, 60, true) !!}
            </div>
            <div class="form-group">
                {!! Form::UTText('descripcion', 'Descripción de la marca', 'Descripción de la marca a registrar', $marca->descripcion, $errors, 256, true) !!}
            </div>
            <button type="submit" class="btn btn-primary mr-2">Guardar</button>
            <a href="{{route('marca.index')}}" class="btn btn-dark">Cancelar</a>
            {!!Form::close() !!}
        </div>
    </div>
@endsection