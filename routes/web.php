<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DepDocIdController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('TipoLicencia', TipoLicenciaController::class);
Route::resource('Persona', PersonaController::class);
Route::resource('DepDocId', DepDocIdController::class);
