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
            <ul class="">
            
                <a type="button" href="{{route('marca.create')}}" class="btn btn-primary" title="Agregar un nuevo registro"><i class="fas fa-plus"></i>   Nuevo registro</a>
            
            </ul>
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
                                <form action="{{route('marca.index')}}" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                        value="{{$search}}" placeholder="Dato a buscar">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Identificador</th>
                                    <th style="width:30%;">Nombre</th>
                                    <th style="width:30%;">Descripción</th>
                                    <th style="width:20%;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->nombre}}</td>
                                    <td>{{$row->descripcion}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('marca.show', $row->id )}}" title="Mostrar marca"><i class="mdi mdi-eye-outline"></i></a>
                                     
                                        <a class="btn btn-primary" href="{{route('marca.edit', $row->id )}}" title="Editar marca"><i class="mdi mdi-pencil-outline"></i></a>
                                      
                                        
                                        <a class="btn btn-danger" href="{{route('marca.delete', $row->id )}}" title="Eliminar marca"><i class="mdi mdi-trash-can-outline"></i></a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->setPath(route('marca.index'))->appends(Request::except('page'))->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection() 