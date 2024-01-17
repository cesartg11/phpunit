<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*Haciendo un grupo de rutas*/

/*Esta de inicioController hay que hacerla, ya que es otro controlador*/
Route::get('/', InicioController::class)->name('inicio');

/*Aqui agrupamos todas las que esten dentro del controlador AnimalController*/
/*Route::controller(AnimalController::class)->group(function(){
    Route::get('animales','index')->name('animales.index');
    Route::get('animales/crear','create')->name('animales.create');
    Route::get('animales/{animal}','show')->name('animales.show');
    Route::get('animales/{animal}/editar','edit')->name('animales.edit');
});*/

/*Sin hacer un grupo de rutas*/
Route::get('/', InicioController::class)->name('inicio');

Route::get('animales', [AnimalController::class, 'index'])->name('animales.index');

Route::get('animales/crear', [AnimalController::class, 'create'])->name('animales.create');

Route::get('animales/{animal}', [AnimalController::class, 'show'])->name('animales.show');

Route::get('animales/{animal}/editar', [AnimalController::class, 'edit'])->name('animales.edit');

Route::post('animales.store', [AnimalController::class, 'store'])->name('animales.store');
Route::post('animales.update', [AnimalController::class, 'update'])->name('animales.update');



