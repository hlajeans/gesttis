<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoEmpresaController;
use App\Http\Controllers\PliegoController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ObservacionController;
use App\Http\Controllers\PlanificacionController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Sitio donde se almacenan todas las rutas para cada seccion de la pagina
|
*/


Auth::routes();
Route::get('/vista', function () {
    return view('vista');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('vistaPrincipal');
    });
    Route::resource('pagos', App\Http\Controllers\PagosController::class);

    Route::resource('sprints', App\Http\Controllers\SprintsController::class);
    
    Route::resource('pliegos', App\Http\Controllers\PliegoController::class);
    //Ruta correspondiente para la grupo empresa
    Route::resource('grupoempresa', App\Http\Controllers\GrupoEmpresaController::class);

    Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

    Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');
    //Ruta correspondiente para las tarjetas
    Route::resource('card', App\Http\Controllers\CardController::class);
    
    Route::resource('observacion', App\Http\Controllers\ObservacionController::class);
    
    Route::resource('sobres', App\Http\Controllers\SobreController::class);

    Route::resource('contrato', App\Http\Controllers\ContratoController::class);

    Route::resource('planificacion', App\Http\Controllers\PlanificacionController::class);

    Route::resource('convocatoria', App\Http\Controllers\ConvocatoriaController::class);

    Route::resource('reporte', App\Http\Controllers\ReporteController::class);

    Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

    Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');

    Route::resource('fases', App\Http\Controllers\FaseController::class);
});


Route::get('/', function () {
    return view('auth.login');
});




/*
Route::post('aceptar', [App\Http\Controllers\ReporteController::class, 'aceptar']);
Route::post('rechazar', [App\Http\Controllers\ReporteController::class, 'rechazar']);


Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [App\Http\Controllers\SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->name('login.destroy');
*/
/*
Route::get('/pagos', [App\Http\Controllers\PagosController::class, 'index'])->name('pagos.index');

Route::get('/pagos/create', [App\Http\Controllers\PagosController::class, 'create'])->name('pagos.create');

Route::post('/pagos/create', [App\Http\Controllers\PagosController::class, 'store'])->name('pagos.store');


Route::resource('pagos', App\Http\Controllers\PagosController::class);
*/

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
