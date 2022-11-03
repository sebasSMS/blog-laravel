<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCtr;
use App\Http\Controllers\Homecontroller; 
use App\Http\Controllers\CursoCtr;
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
/* Ruta principal */
Route::get('/',Homecontroller::class)->name('home');
Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
route::view('nosotros', 'nosotros')->name('nosotros');

/* Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');
 */



/* Route::controller(CursoController::class)->group(function(){
    /* definir una nueva ruta 
    Route::get('cursos', 'index');
    /* cursos/javascript 
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
}); */