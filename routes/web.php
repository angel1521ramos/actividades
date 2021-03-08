<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\actividadController;
use App\Http\Controllers\alumnoController;
use App\Http\Controllers\docenteController;
use App\Models\Actividad;
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

Route::get('{id}/visualizarLista', [actividadController::class, 'visualizarPDF'])->name('actividad.visualizar');
Route::get('{id}/descargarLista', [actividadController::class, 'downloadPDF'])->name('actividad.lista');

Route::get('visualizarListaactividades', [actividadController::class, 'visualizarPDFactividades'])->name('actividad.visualizar.actividades');
Route::get('descargarListaactividades', [actividadController::class, 'downloadPDFactividades'])->name('actividad.lista.actividades');

Route::resource('actividad', actividadController::class);
Route::resource('alumno', alumnoController::class);
Route::resource('docente', docenteController::class);
Route::get('/', function () {

    $actividad = Actividad::all();
            $longitud = sizeof($actividad);
            if ($longitud == 0) {
                return view('error');

            }else{
                return view('actividad.visualizar', compact('actividad'));
            }

})->name('inicio');