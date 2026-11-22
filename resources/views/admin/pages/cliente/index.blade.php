@extends('admin.layout.principal')

@section('contenido')
@if(Session::has('status'))
    <div class="col-md-12 alert-section">
        <div class="alert alert-{{ Session::get('status_type') }}" style="text-align: center; padding: 5px; margin-bottom: 5px;">
            <span style="font-size: 20px; font-weight: bold;">
                {{ Session::get('status') }}
                @php
                    Session::forget('status');
                @endphp
            </span>
        </div>
    </div>
@endif
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Listado de Personas</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="body table-responsive">
                    <div class="row mb-3">
                        <div class="col-lg-7 col-sm-7 col-7">
                            <h5>{{ $data->total() }} Registro(s) encontrado(s). Página
                                {{ ($data->total() == 0) ? '0' : $data->currentPage() }} de
                                {{ $data->lastPage() }}. Registros por página:
                                {{ ($data->total() == 0) ? '0' : $data->perPage() }}
                            </h5>
                        </div>
                        <div class="col-lg-5 col-sm-7 col-5">
                            <form action="{{ route('cliente.index') }}" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search"
                                    value="{{ $search }}" placeholder="Dato a buscar">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width:10%;">ID</th>
                                <th style="width:30%;">Nombre</th>
                                <th style="width:30%;">Apellido Paterno</th>
                                <th style="width:30%;">Apellido Masterno</th>
                                <th style="width:20%;">Email</th>
                                <th style="width:10%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nombre }}</td>
                                <td>{{ $row->primerApellido }}</td>
                                <td>{{ $row->segundoApellido }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('cliente.show', $row->id) }}" title="Ver persona">
                                        <i class="mdi mdi-eye-outline"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No se encontraron registros.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $data->setPath(route('cliente.index'))->appends(Request::except('page'))->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
