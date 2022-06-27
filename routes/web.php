<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/usuario')->group(function () {
    Route::get('', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuario.index');
    Route::post('', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('/edit-usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'edit']);
    Route::put('/update-usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'update']);
    Route::delete('/delete-usuario/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy']);
    Route::get('/modificarStatus', [App\Http\Controllers\UsuarioController::class, 'modificarStatus']);
    Route::get('/modificarStatusPagamento', [App\Http\Controllers\UsuarioController::class, 'modificarStatusPagamento']);

});



