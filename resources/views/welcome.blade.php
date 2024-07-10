@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="display-4">Bienvenido al Sistema de Inventario</h1>
    <p class="lead">Gestiona y organiza tus equipos de manera fácil y eficiente.</p>
    <a href="{{ route('equipos.index') }}" class="btn btn-primary btn-lg">Ir al Inventario</a>
    <div class="mt-4">
        <p>¿Necesitas ayuda? Visita nuestra <a href="{{ url('/contacto') }}">página de contacto</a> para más información.</p>
    </div>
</div>
@endsection