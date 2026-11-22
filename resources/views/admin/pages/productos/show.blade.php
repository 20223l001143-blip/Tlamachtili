@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información del producto</h4>
            <div class="row">
              <table class="table table-striper">
            <tbody>
                <tr>
                    <td>Nombre</td>
                    <td>{{$producto->nombre}}</td>
                </tr>
                <tr>
                    <td>Stock del producto</td>
                    <td>{{$producto->cantidadDisponible}}</td>
                </tr>
                <tr>
                    <td>Cantidad mínima</td>
                    <td>{{$producto->cantidadMinima}}</td>
                </tr>
                <tr>
                    <td>Cantidad máxima</td>
                    <td>{{$producto->cantidadMaxima}}</td>
                </tr>
                <tr>
                    <td>Descripción</td>
                    <td>{{$producto->descripcion}}</td>
                </tr>
                <tr>
                    <td>Precio Publico</td>
                    <td>{{$producto->precioPublico}}</td>
                </tr>
                <tr>
                    <td>Precio Mayorista</td>
                    <td>{{$producto->precioMayorista}}</td>
                </tr>
                <tr>
                    <td>Cantidad Mayorista</td>
                    <td>{{$producto->cantidadMayorista}}</td>
                </tr>
                <tr>
                    <td>Presentación del producto</td>
                    <td>{{$producto->presentacion}}</td>
                </tr>
                <tr>
                    <td>Código del producto</td>
                    <td>{{$producto->codigoBarras}}</td>
                </tr>
                <tr>
                    <td>Categoría</td>
                    <td>{{$producto->categoria_id}}</td>
                </tr>
                <tr>
                    <td>Marca del producto</td>
                    <td>{{$producto->marca_id}}</td>
                </tr>
              
                <tr>
                    <td>Imagen del producto</td>
                    <td><img src="{{ URL::asset('admin/uploads/productos/' . $producto->imagen) }}" style="width: 8em; height: 100px;"></td>
                </tr>
            </tbody>
            </table>
            </div>
            <a href="{{route('producto.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
    </div>
@endsection
