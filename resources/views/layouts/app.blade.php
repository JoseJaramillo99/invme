<!DOCTYPE html>
<html>
<head>
    <title>Inventario de Equipos</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <!-- Font Awesome 6 -->
    <!-- Elimina @livewireStyles -->
</head>
<body id="theme">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <a class="navbar-brand" href="{{ url('/') }}">Inventario</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('equipos.index') }}">Equipos</a>
                </li>
            </ul>
        </div>
        <!-- Elimina el botón para el cambio de tema claro/oscuro -->
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Elimina @livewireScripts -->
</body>
</html>