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
    
    .table, .jsgrid .jsgrid-table {
    margin-bottom: 0;
    color: #ffffff;
}
 
</style>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información del usuario</h4>
            {!!Form::open(['route' => 'usuario.store', 'method' => 'post']) !!}
            <div class="form-group">
               {!! Form::UTTextOnly('name', 'Nombre completo del usario', 'Nombre completo del usario ', null, $errors, 80, true) !!}
            </div>
            <div class="form-group">
                {!! Form::UTText('email', 'Correo electrónico', 'Correo electrónico', null, $errors, 60, true) !!}
            </div>
            <div class="form-group">
                {!! Form::UTList('rol', 'Puesto', 'Puesto a desempeñar', ['Administrador'=> 'Administrador','Empleado'=>'Empleado'], null , $errors, true) !!}
            </div>
            <button type="submit" class="btn btn-primary mr-2">Guardar</button>
            <a href="{{route('usuario.index')}}" class="btn btn-dark">Cancelar</a>
            {!!Form::close() !!}
        </div>
    </div>
@endsection

@section('js_custom')
    <script src="{{asset('admin/js/validatorFields.js')}}"></script>
@endsection()