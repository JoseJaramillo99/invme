@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">
        <i class="fa-solid fa-plus"></i> Agregar Nuevo Equipo
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>Almacenamiento</th>
                <th>Sistema Operativo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->placa }}</td>
                <td>{{ $equipo->tipo }}</td>
                <td>{{ $equipo->marca }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td>{{ $equipo->serial }}</td>
                <td>{{ $equipo->procesador }}</td>
                <td>{{ $equipo->ram }}</td>
                <td>{{ $equipo->storage }}</td>
                <td>{{ $equipo->so }}</td>
                <td>
                    <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info btn-sm" title="Ver">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm" title="Editar">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $equipos->links() }}
    </div>
</div>
@endsection