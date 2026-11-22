@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
    {!! Form::open (['route' => ['categoria.destroy', $categoria->id], 'method' => 'get']) !!}
        <div class="card-body">
            <h4 class="card-title">Información de la categoría a eliminar</h4>
            <div class="row">
                 <table class="table table-striper">
                   <thead>
                        <tr>
                            <th colspan="2" style="color:darkred;font-size:large;">¿Está usted seguro de eliminar la siguiente categoría?</th>
                        </tr>
                   </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>{{$categoria->nombre}}</td>
                        </tr>
                        <tr>
                            <td>Descripción</td>
                            <td>{{$categoria->descripcion}}</td>
                        </tr>
                    </tbody>
                 </table>
            </div>
            <button type="submit" class="btn btn-danger mr-2">Eliminar</button>
            <a href="{{route('categoria.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
        {!!Form::close() !!}
    </div>
@endsection
