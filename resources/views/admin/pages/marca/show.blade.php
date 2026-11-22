@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información de la marca</h4>
            <div class="row">
                 <table class="table table-striper">
                   <thead>
                        <tr>
                            <th colspan="2">Información de la marca</th>
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
            <a href="{{route('marca.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
    </div>
@endsection
