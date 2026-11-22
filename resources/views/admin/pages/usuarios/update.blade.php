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
        <h4 class="card-title">Actualizar Registro de Usuario</h4>
        {!! Form::open(['route' => ['usuario.update', $user->id], 'method' => 'put']) !!}

        <!-- Nombre -->
        <div class="form-group">
            {!! Form::label('name', 'Nombre completo del usuario') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo del usuario', 'required']) !!}
        </div>

        <!-- Correo -->
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Correo electrónico del usuario', 'required']) !!}
        </div>

        <!-- Botones -->
        <button type="submit" class="btn btn-primary mr-2">Guardar</button>
        <a href="{{ route('usuario.index') }}" class="btn btn-dark">Cancelar</a>

        {!! Form::close() !!}
    </div>
</div>
@endsection
