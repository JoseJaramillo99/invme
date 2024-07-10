@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="placa">Placa:</label>
            <input type="text" class="form-control" id="placa" name="placa" value="{{ $equipo->placa }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $equipo->tipo }}" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ $equipo->marca }}" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $equipo->modelo }}" required>
        </div>
        <div class="form-group">
            <label for="serial">Serial:</label>
            <input type="text" class="form-control" id="serial" name="serial" value="{{ $equipo->serial }}" required>
        </div>
        <div class="form-group">
            <label for="procesador">Procesador:</label>
            <input type="text" class="form-control" id="procesador" name="procesador" value="{{ $equipo->procesador }}" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM:</label>
            <input type="text" class="form-control" id="ram" name="ram" value="{{ $equipo->ram }}" required>
        </div>
        <div class="form-group">
            <label for="storage">Almacenamiento:</label>
            <input type="text" class="form-control" id="storage" name="storage" value="{{ $equipo->storage }}" required>
        </div>
        <div class="form-group">
            <label for="so">Sistema Operativo:</label>
            <input type="text" class="form-control" id="so" name="so" value="{{ $equipo->so }}" required>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-save"></i> Actualizar
        </button>
    </form>
</div>
@endsection