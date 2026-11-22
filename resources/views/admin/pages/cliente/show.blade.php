@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información de la Persona</h4>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Detalles de la Persona</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Nombre</strong></td>
                            <td>{{ $persona->nombre }}</td>
                        </tr>
                        <tr>
                            <td><strong>Apellido Paterno</strong></td>
                            <td>{{ $persona->primerApellido }}</td>
                        </tr>
                        <tr>
                            <td><strong>Apellido Materno</strong></td>
                            <td>{{ $persona->segundoApellido }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{ $persona->email ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Teléfono</strong></td>
                            <td>{{ $persona->telefono ?? 'N/A' }}</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <a href="{{ route('cliente.index') }}" class="btn btn-dark">Volver</a>
        </div>
    </div>
@endsection
