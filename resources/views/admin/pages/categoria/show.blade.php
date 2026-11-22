@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información de la categoría</h4>
            <div class="row">
                 <table class="table table-striper">
                   <thead>
                        <tr>
                            <th colspan="2">Información de la categoría</th>
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
            <a href="{{route('categoria.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
    </div>
@endsection
