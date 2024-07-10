@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Equipo</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Placa:</strong> {{ $equipo->placa }}</li>
        <li class="list-group-item"><strong>Tipo:</strong> {{ $equipo->tipo }}</li>
        <li class="list-group-item"><strong>Marca:</strong> {{ $equipo->marca }}</li>
        <li class="list-group-item"><strong>Modelo:</strong> {{ $equipo->modelo }}</li>
        <li class="list-group-item"><strong>Serial:</strong> {{ $equipo->serial }}</li>
        <li class="list-group-item"><strong>Procesador:</strong> {{ $equipo->procesador }}</li>
        <li class="list-group-item"><strong>RAM:</strong> {{ $equipo->ram }}</li>
        <li class="list-group-item"><strong>Almacenamiento:</strong> {{ $equipo->storage }}</li>
        <li class="list-group-item"><strong>Sistema Operativo:</strong> {{ $equipo->so }}</li>
    </ul>
    <a href="{{ route('equipos.index') }}" class="btn btn-secondary mt-3">
        <i class="fa-solid fa-arrow-left"></i> Volver
    </a>
</div>
@endsection
