@extends('admin.layout.principal')

@section('contenido')

    <div class="card">

    {!! Form::open(['route' => ['aviso.destroy', $aviso->id], 'method' => 'POST']) !!}
    @method('DELETE')

        <div class="card-body">

            <h4 class="card-title mb-4">Información del aviso a eliminar</h4>

            <div class="row">

                 <table class="table table-bordered">

                   <thead>
                        <tr>
                            <th colspan="2" class="text-center text-danger" style="font-size: large;">
                                ¿Está usted seguro de eliminar el siguiente aviso?
                            </th>
                        </tr>
                   </thead>

                    <tbody>
                        <tr>
                            <td><strong>Título</strong></td>
                            <td>{{ $aviso->titulo }}</td>
                        </tr>
                        <tr>
                            <td><strong>Descripción</strong></td>
                            <td>{{ $aviso->descripcion }}</td>
                        </tr>
                        <tr>
                            <td><strong>Fecha de Publicación</strong></td>
                            <td>{{ $aviso->fecha_publicacion ? $aviso->fecha_publicacion->format('d/m/Y') : 'No especificada' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Fecha de Expiración</strong></td>
                            <td>{{ $aviso->fecha_expiracion ? $aviso->fecha_expiracion->format('d/m/Y') : 'No especificada' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Imagen del aviso</strong></td>
                            <td>
                                @if($aviso->imagen)
                                    <img src="{{ asset('admin/uploads/avisos/' . $aviso->imagen) }}" alt="Imagen aviso" style="width: 8em; height: 100px; object-fit: cover;">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                        </tr>
                    </tbody>

                 </table>

            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-danger mr-2">Eliminar</button>
                <a href="{{ route('aviso.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

        </div>

    {!! Form::close() !!}

    </div>

@endsection
