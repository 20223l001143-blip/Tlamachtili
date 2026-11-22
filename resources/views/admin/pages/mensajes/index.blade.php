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
<div class="card">
    <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                    <div class="body table-responsive">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 col-7">
                                <h5>{{$data->total()}} Registro(s) encontrado(s). Página
                                    {{($data->total() ==0) ? '0' : $data->currentPage()}} de
                                    {{$data->lastPage()}} Registros por página.
                                    {{($data->total()==0) ? '0' : $data->perPage()}}
                                </h5>
                                </div>
                            <div class="col-lg-5 col-sm-7 col-5">
                                <form action="{{route('mensajes.index')}}" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                        value="{{$search}}" placeholder="Dato a buscar">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-search-web"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Nombre</th>
                                    <th style="width:10%;">Correo electrónico</th>
                                    <th style="width:25%;">Teléfono</th>
                                    <th style="width:35%;">Mensaje</th>
                                    <th style="width:10%;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->nombre}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->telefono}}</td>
                                    <td>{{$row->mensaje}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('producto.show', $row->id )}}" title="Mostrar producto"><i class="mdi mdi-eye-outline"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->setPath(route('mensajes.index'))->appends(Request::except('page'))->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
