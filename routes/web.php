<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'publico.inicio');

Route::view('/ofertas', 'ofertas.index');
// (más adelante: /ofertas/{id})

Route::view('/login', 'autenticacion.login');
Route::view('/registro', 'autenticacion.registro');
