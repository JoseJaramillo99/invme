<?php

use App\Http\Controllers\EquipoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('equipos', EquipoController::class);