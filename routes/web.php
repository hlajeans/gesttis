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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('auth.login');
});
*/

Route::get('/vista', function () {
    return view('vista');
});

Route::resource('pliegos', PliegoController::class);
Route::resource('grupoempresa', GrupoEmpresaController::class);
Auth::routes();

//Route::get('/home',[GrupoEmpresaController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    //Route::get('/', [GrupoEmpresaController::class, 'index'])->name('home');

});


Route::get('/', function () {
    return view('vistaPrincipal');
});



Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');
Route::resource('card', CardController::class);
Route::resource('observacion', ObservacionController::class);
Route::resource('sobres', App\Http\Controllers\SobreController::class);

Route::resource('contrato', ContratoController::class);

Route::resource('planificacion', App\Http\Controllers\PlanificacionController::class);

Route::resource('convocatoria', ConvocatoriaController::class);

Route::resource('reporte', ReporteController::class);

Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');

Route::resource('fases', App\Http\Controllers\FaseController::class);

Route::post('aceptar', [App\Http\Controllers\ReporteController::class, 'aceptar']);
Route::post('rechazar', [App\Http\Controllers\ReporteController::class, 'rechazar']);


Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [App\Http\Controllers\SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->name('login.destroy');

Route::get('/pagos', [App\Http\Controllers\PagosController::class, 'index'])->name('pagos.index');

Route::get('/pagos/create', [App\Http\Controllers\PagosController::class, 'create'])->name('pagos.create');

Route::post('/pagos/create', [App\Http\Controllers\PagosController::class, 'store'])->name('pagos.store');


Route::resource('pagos', App\Http\Controllers\PagosController::class);


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
