<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(controlador::class)->group(function(){
    Route::get('/', 'Bienvenido')->name('inicio');
    Route::post('/','Login')->name('login');
    Route::get('lista' , 'MostrarLibros');
    Route::post('lista' , 'crearlibros')->name('libros');
    Route::get('Registro', 'create');
    Route::post('Registro', 'Registro')->name('registracion');
    Route::get('cerrar', 'CerrarSesion')->name('cerrarUsu');
    Route::post('editar', 'Editarlib')->name('edit');
    Route::post('eliminar', 'eliminarlib')->name('eli');
});

