<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function() {
    return "hello world";
});

Route::get('/usuario/{nombre}', function($nombre) {
	return "Hola $nombre";
});

Route::get('/suma/{a}/{b}', function($a, $b) {
	$total = $a + $b;
	return "Total: $total";
});

Route::get('/inicio', [PaginaController::class, 'inicio']);
Route::get('/contacto', [PaginaController::class, 'contacto']);