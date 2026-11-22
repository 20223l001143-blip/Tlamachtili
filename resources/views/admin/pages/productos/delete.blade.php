@extends('admin.layout.principal')

@section('contenido')

    <div class="card">

    {!! Form::open(['route' => ['producto.destroy', $producto->id], 'method' => 'POST']) !!}
    @method('DELETE') 

        <div class="card-body">

            <h4 class="card-title">Información del producto a eliminar</h4>

            <div class="row">

                 <table class="table">

                   <thead>

                        <tr>

                            <th colspan="2" style="color:darkred;font-size:large;">¿Está usted seguro de eliminar el siguiente producto?</th>

                        </tr>

                   </thead>

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

            <button type="submit" class="btn btn-danger mr-2">Eliminar</button>

            <a href="{{ route('producto.index') }}" class="btn btn-dark">Cancelar</a>

        </div>

    {!! Form::close() !!}

    </div>

@endsection
