@extends('admin.layout.principal')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información del usuario</h4>
            <div class="row">
            <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Rol</td>
                            <td>
                                @if($user->roles->isNotEmpty())
                                    {{ $user->roles->pluck('name')->join(', ') }}
                                @else
                                    Sin rol asignado
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha de creación</td>
                            <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <td>Última actualización</td>
                            <td>{{ $user->updated_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route('usuario.index')}}" class="btn btn-dark">Cancelar</a>
        </div>
    </div>
@endsection