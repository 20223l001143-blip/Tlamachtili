
@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
    
    {!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'POST']) !!}
     @method('DELETE') 

        <div class="card-body">
            <h4 class="card-title">¿Está seguro de eliminar el siguiente usuario?</h4>
            <div class="row">
                 <table class="table table-striper">
                   <thead>
                       
                   </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Correo electrónico</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                 </table>
            </div>
            <button type="submit" class="btn btn-danger mr-2">Eliminar</button>
            <a href="{{route('usuario.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
        {!!Form::close() !!}
    </div>
@endsection