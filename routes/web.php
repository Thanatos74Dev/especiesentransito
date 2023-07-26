<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\FabricanteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriodicidadController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RiesgoController;
use App\Http\Controllers\TiposMantenimientoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SedeController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/mantenimientos', [HomeController::class, 'mantenimientos'])->name('mantenimientos');

Route::get('/complejidad', [HomeController::class, 'complejidad'])->name('complejidad');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO USUARIO 13/03/2023
Route::post('registrar_usuario', [UsersController::class, 'registrar_usuario'])->name('registrar_usuario');
Route::get('usuarios', [UsersController::class, 'usuarios'])->name('usuarios');
Route::post('actualizar_usuario', [UsersController::class, 'actualizar_usuario'])->name('actualizar_usuario');
Route::get('contrasena', [HomeController::class, 'contrasena'])->name('contrasena')->name('contrasena');
Route::post('restablecer_contrasena', [UsersController::class, 'restablecer_contrasena'])->name('restablecer_contrasena');
Route::get('perfil', [UsersController::class, 'consulta_usuario_especifico'])->name('consulta_usuario_especifico');
Route::get('usuario_especifico/{id}', [UsersController::class, 'usuario_especifico'])->name('usuario_especifico');
Route::post('actualizar_usuario_especifico', [UsersController::class, 'actualizar_usuario_especifico'])->name('actualizar_usuario_especifico');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO RIESGOS 06/06/2023
Route::get('/riesgos', [RiesgoController::class, 'riesgos'])->name('riesgos');
Route::post('/registrar_riesgos', [RiesgoController::class, 'registrar_riesgos'])->name('registrar_riesgos');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO TIPO MANTENIMIENTOS 06/06/2023
Route::get('/tipo_mantenimientos', [TiposMantenimientoController::class, 'tipo_mantenimientos'])->name('tipo_mantenimientos');
Route::post('/registrar_tipos_mantenimientos', [TiposMantenimientoController::class, 'registrar_tipos_mantenimientos'])->name('registrar_tipos_mantenimientos');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PERIODICIDAD 06/06/2023
Route::get('/periodicidad', [PeriodicidadController::class, 'periodicidad'])->name('periodicidad');
Route::post('registrar_periodicidad', [PeriodicidadController::class, 'registrar_periodicidad'])->name('registrar_periodicidad');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO ESPECIALIDADES 06/06/2023
Route::get('/especialidades', [EspecialidadController::class, 'especialidades'])->name('especialidades');
Route::post('/registrar_especialidades', [EspecialidadController::class, 'registrar_especialidades'])->name('registrar_especialidades');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO FABRICANTES 06/06/2023
Route::get('/fabricantes', [FabricanteController::class, 'fabricantes'])->name('fabricantes');
Route::post('/registrar_fabricantes', [FabricanteController::class, 'registrar_fabricantes'])->name('registrar_fabricantes');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PROVEEDORES 13/06/2023
Route::get('/proveedores', [ProveedorController::class, 'proveedores'])->name('proveedores');
Route::post('/registrar_proveedor', [ProveedorController::class, 'registrar_proveedor'])->name('registrar_proveedor');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO EQUIPOS 12/04/2023
Route::get('/equipos', [EquiposController::class, 'equipos'])->name('equipos');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO ÁREAS 23/04/2023
Route::get('/areas', [AreaController::class, 'areas'])->name('areas');
Route::post('/registrar_areas', [AreaController::class, 'registrar_areas'])->name('registrar_areas');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO SEDES 23/04/2023
Route::get('/sedes', [SedeController::class, 'sedes'])->name('sedes');
Route::post('/registrar_sedes', [SedeController::class, 'registrar_sedes'])->name('registrar_sedes');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PERFIL EMPRESARIAL 23/04/2023
Route::get('/perfil_empresarial', [EmpresaController::class, 'perfil_empresarial'])->name('perfil_empresarial');
Route::post('/registrar_empresas', [EmpresaController::class, 'registrar_empresas'])->name('registrar_empresas');

