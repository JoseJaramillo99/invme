@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="placa">Placa:</label>
            <input type="text" class="form-control" id="placa" name="placa" value="{{ old('placa') }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ old('tipo') }}" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo') }}" required>
        </div>
        <div class="form-group">
            <label for="serial">Serial:</label>
            <input type="text" class="form-control" id="serial" name="serial" value="{{ old('serial') }}" required>
        </div>
        <div class="form-group">
            <label for="procesador">Procesador:</label>
            <input type="text" class="form-control" id="procesador" name="procesador" value="{{ old('procesador') }}" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM:</label>
            <input type="text" class="form-control" id="ram" name="ram" value="{{ old('ram') }}" required>
        </div>
        <div class="form-group">
            <label for="storage">Almacenamiento:</label>
            <input type="text" class="form-control" id="storage" name="storage" value="{{ old('storage') }}" required>
        </div>
        <div class="form-group">
            <label for="so">Sistema Operativo:</label>
            <input type="text" class="form-control" id="so" name="so" value="{{ old('so') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-save"></i> Guardar
        </button>
    </form>
</div>
@endsection