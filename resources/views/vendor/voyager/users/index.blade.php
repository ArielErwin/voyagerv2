@extends('voyager::master')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Usuarios</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                            <th>Foto</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                <td>
                                    @if ($user->avatar)
                                        <img src="{{ Voyager::image($user->avatar) }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                    @else
                                        <img src="{{ Voyager::image('users/default.png') }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                    @endif
                                </td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-info">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('voyager.users.show', $user->id) }}" class="btn btn-sm btn-info">Ver</a>
                                    @if (Auth::user()->role->name === 'admin')
                                        <a href="{{ route('voyager.users.edit', $user->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('voyager.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
