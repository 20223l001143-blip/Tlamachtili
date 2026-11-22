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

<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-dark text-white text-center">
        <h3>Catálogo de Productos</h3>
    </div>
    <div class="card-body">
        <!-- Buscador y total de registros -->
        <div class="row mb-4">
            <div class="col-lg-7 col-sm-12">
                <h5>
                    📦 {{ $data->total() }} Registro(s) encontrado(s). Página 
                    {{ ($data->total() == 0) ? '0' : $data->currentPage() }} de 
                    {{ $data->lastPage() }} | Registros por página: 
                    {{ ($data->total() == 0) ? '0' : $data->perPage() }}
                </h5>
            </div>
            <div class="col-lg-5 col-sm-12">
                <form action="{{ route('carrito.index') }}" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Buscar producto...">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-search-web"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Cards de productos -->
        <div class="row">
            @foreach($data as $row)
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow-lg rounded-lg" style="background-color: #8070d8; color: white; border-radius: 12px;">
                    <div class="row g-0 align-items-center">
                        <!-- Imagen con margen izquierdo ajustado -->
                        <div class="col-md-4 text-center" style="padding: 10px 10px 10px 20px;"> <!-- Ajuste aquí -->
                            <img src="{{ URL::asset('admin/uploads/productos') . '/' . $row->imagen }}" 
                                 class="img-fluid rounded-start" 
                                 alt="{{ $row->nombre }}" 
                                 style="border-radius: 8px; height: 180px; width: 100%; object-fit: cover;">
                        </div>

                        <!-- Contenido del producto -->
                        <div class="col-md-8" style="padding-left: 10px;"> <!-- Mantengo el espacio -->
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight: bold;">{{ $row->nombre }}</h4>
                                <h6 class="card-title">{{ $row->presentacion }}</h6>
                                <p class="card-text" style="font-size: 14px;">{{ $row->descripcion }}</p>
                                <h5 class="card-title">💲 Precio: ${{ $row->precioPublico }}</h5>
                                <p class="card-text">📦 Cantidad Disponible: {{ $row->cantidadDisponible }}</p>
                                <a href="{{ route('carrito.add', $row->id) }}" class="btn btn-success" 
                                   style="background-color: #48c9b0; border: none; padding: 8px 16px; font-size: 16px; border-radius: 8px;">
                                    🛒 Comprar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="mt-4 text-center">
            {{ $data->setPath(route('carrito.index'))->appends(Request::except('page'))->render('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection

