<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
<<<<<<< HEAD
use App\Http\Controllers\armaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;
<<<<<<< Updated upstream
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ReparticionController;
=======
<<<<<<< Updated upstream
use App\Http\Controllers\departamentoController;
=======
use App\Http\Controllers\armaController;
>>>>>>> Stashed changes
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\CargoController;
=======
use App\Http\Controllers\PersonaController;
>>>>>>> a05e1391d91ff54a2552f5d093cbde417bc4a680
=======
use App\Http\Controllers\RolController;
=======
use App\Http\Controllers\PersonaController;
<<<<<<< HEAD
=======
use App\Http\Controllers\TipoArchivoController;
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 0dfff27258ac773f74c5e535a1b461fb90f9bea6
>>>>>>> 1cd8dc252efbd8502170cfb747b66164c5b55e65
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
=======
use App\Http\Controllers\EspecialidadController;
>>>>>>> Stashed changes


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

<<<<<<< HEAD

// /************** TIPO LICENCIA ***********/
// Route::group(['prefix' => 'TipoLicencia'], function () {
//     Route::get('/index', [TipoLicenciaController::class, 'index'])->name('TipoLicencia.index');
//     Route::post('/store', [TipoLicenciaController::class, 'store'])->name('TipoLicencia.store');
//     Route::post('/create', [TipoLicenciaController::class, 'create'])->name('TipoLicencia.create');
//     Route::get('/show/{id}', [TipoLicenciaController::class, 'show'])->name('TipoLicencia.show');
//     Route::get('/update/{id}', [TipoLicenciaController::class, 'update'])->name('TipoLicencia.update');
//     Route::delete('/destroy/{id}', [TipoLicenciaController::class, 'destroy'])->name('TipoLicencia.destroy');
//     Route::delete('/{id}/edit', [TipoLicenciaController::class, 'edit'])->name('TipoLicencia.edit');
// });


Route::resource('TipoLicencia', TipoLicenciaController::class);
<<<<<<< HEAD
Route::resource('Grado', GradoController::class);
=======
<<<<<<< Updated upstream
<<<<<<< HEAD
<<<<<<< HEAD
Route::resource('arma', armaController::class);
=======
=======
Route::resource('Especialidad', EspecialidadController::class);
>>>>>>> Stashed changes
>>>>>>> 1ab8864444ac8407caae7f4b4d8fd1060d172f19

Route::resource('Persona', PersonaController::class);
Route::resource('Reparticion', ReparticionController::class);



>>>>>>> 554e2234471abc608d7f231ed65c0a2843766dd0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a05e1391d91ff54a2552f5d093cbde417bc4a680
=======
Route::resource('Rol', RolController::class);
=======
<<<<<<< HEAD
>>>>>>> 1cd8dc252efbd8502170cfb747b66164c5b55e65
<<<<<<< Updated upstream
Route::resource('departamento', departamentoController::class);
 
=======
<<<<<<< HEAD
Route::resource('Cargo', CargoController::class);

=======
Route::resource('Persona', PersonaController::class);
=======
Route::resource('TipoLicencia', TipoLicenciaController::class);
Route::resource('Persona', PersonaController::class);
Route::resource('TipoArchivo', TipoArchivoController::class);
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 0dfff27258ac773f74c5e535a1b461fb90f9bea6

>>>>>>> f90d9030b15ed1a2e9ccc9d74d966c9106c50a59
=======
Route::resource('Persona', PersonaController::class);

=======
Route::resource('arma', armaController::class);
 
>>>>>>> 5db005e33ebfaa1399669cab54ae8ab894420ee9
>>>>>>> a05e1391d91ff54a2552f5d093cbde417bc4a680
>>>>>>> Stashed changes
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
