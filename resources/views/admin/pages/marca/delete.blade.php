@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
    {!! Form::open (['route' => ['marca.destroy', $marca->id], 'method' => 'get']) !!}
        <div class="card-body">
            <h4 class="card-title">Información de la marca a eliminar</h4>
            <div class="row">
                 <table class="table table-striper">
                   <thead>
                        <tr>
                            <th colspan="2" style="color:darkred;font-size:large;">¿Esta usted seguro de eliminar la siguiente marca?</th>
                        </tr>
                   </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>{{$marca->nombre}}</td>
                        </tr>
                        <tr>
                            <td>Descripción</td>
                            <td>{{$marca->descripcion}}</td>
                        </tr>
                    </tbody>
                 </table>
            </div>
            <button type="submit" class="btn btn-danger mr-2">Eliminar</button>
            <a href="{{route('marca.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
        {!!Form::close() !!}
    </div>
@endsection