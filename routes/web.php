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
use App\Http\Controllers\ComplejidadController;
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

Route::get('/complejidad', [ComplejidadController::class, 'complejidad'])->name('complejidad');
Route::post('/registrar_complejidad', [ComplejidadController::class, 'registrar_complejidad'])->name('registrar_complejidad');
Route::post('/actualizar_complejidad', [ComplejidadController::class, 'actualizar_complejidad'])->name('actualizar_complejidad');
Route::post('/habilitacion_complejidad', [ComplejidadController::class, 'habilitacion_complejidad'])->name('habilitacion_complejidad');
Route::post('/inhabilitacion_complejidad', [ComplejidadController::class, 'inhabilitacion_complejidad'])->name('inhabilitacion_complejidad');


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
Route::post('/actualizar_riesgo', [RiesgoController::class, 'actualizar_riesgo'])->name('actualizar_riesgo');
Route::post('/habilitacion_riesgo', [RiesgoController::class, 'habilitacion_riesgo'])->name('habilitacion_riesgo');
Route::post('/inhabilitacion_riesgo', [RiesgoController::class, 'inhabilitacion_riesgo'])->name('inhabilitacion_riesgo');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO TIPO MANTENIMIENTOS 06/06/2023
Route::get('/tipo_mantenimientos', [TiposMantenimientoController::class, 'tipo_mantenimientos'])->name('tipo_mantenimientos');
Route::post('/registrar_tipos_mantenimientos', [TiposMantenimientoController::class, 'registrar_tipos_mantenimientos'])->name('registrar_tipos_mantenimientos');
Route::post('/actualizar_tipo_mantenimiento', [TiposMantenimientoController::class, 'actualizar_tipo_mantenimiento'])->name('actualizar_tipo_mantenimiento');
Route::post('/habilitacion_tipo_mantenimiento', [TiposMantenimientoController::class, 'habilitacion_tipo_mantenimiento'])->name('habilitacion_tipo_mantenimiento');
Route::post('/inhabilitacion_tipo_mantenimiento', [TiposMantenimientoController::class, 'inhabilitacion_tipo_mantenimiento'])->name('inhabilitacion_tipo_mantenimiento');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PERIODICIDAD 06/06/2023
Route::get('/periodicidad', [PeriodicidadController::class, 'periodicidad'])->name('periodicidad');
Route::post('registrar_periodicidad', [PeriodicidadController::class, 'registrar_periodicidad'])->name('registrar_periodicidad');
Route::post('/actualizar_periodicidad', [PeriodicidadController::class, 'actualizar_periodicidad'])->name('actualizar_periodicidad');
Route::post('/habilitacion_periodicidad', [PeriodicidadController::class, 'habilitacion_periodicidad'])->name('habilitacion_periodicidad');
Route::post('/inhabilitacion_periodicidad', [PeriodicidadController::class, 'inhabilitacion_periodicidad'])->name('inhabilitacion_periodicidad');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO ESPECIALIDADES 06/06/2023
Route::get('/especialidades', [EspecialidadController::class, 'especialidades'])->name('especialidades');
Route::post('/registrar_especialidades', [EspecialidadController::class, 'registrar_especialidades'])->name('registrar_especialidades');
Route::post('/actualizar_especialidad', [EspecialidadController::class, 'actualizar_especialidad'])->name('actualizar_especialidad');
Route::post('/habilitacion_especialidad', [EspecialidadController::class, 'habilitacion_especialidad'])->name('habilitacion_especialidad');
Route::post('/inhabilitacion_especialidad', [EspecialidadController::class, 'inhabilitacion_especialidad'])->name('inhabilitacion_especialidad');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO FABRICANTES 06/06/2023
Route::get('/fabricantes', [FabricanteController::class, 'fabricantes'])->name('fabricantes');
Route::post('/registrar_fabricantes', [FabricanteController::class, 'registrar_fabricantes'])->name('registrar_fabricantes');
Route::post('/actualizar_fabricante', [FabricanteController::class, 'actualizar_fabricante'])->name('actualizar_fabricante');
Route::post('/habilitacion_fabricante', [FabricanteController::class, 'habilitacion_fabricante'])->name('habilitacion_fabricante');
Route::post('/inhabilitacion_fabricante', [FabricanteController::class, 'inhabilitacion_fabricante'])->name('inhabilitacion_fabricante');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PROVEEDORES 13/06/2023
Route::get('/proveedores', [ProveedorController::class, 'proveedores'])->name('proveedores');
Route::post('/registrar_proveedor', [ProveedorController::class, 'registrar_proveedor'])->name('registrar_proveedor');
Route::post('/actualizar_proveedor', [ProveedorController::class, 'actualizar_proveedor'])->name('actualizar_proveedor');
Route::post('/habilitacion_proveedor', [ProveedorController::class, 'habilitacion_proveedor'])->name('habilitacion_proveedor');
Route::post('/inhabilitacion_proveedor', [ProveedorController::class, 'inhabilitacion_proveedor'])->name('inhabilitacion_proveedor');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO EQUIPOS 12/04/2023
Route::get('/equipos', [EquiposController::class, 'equipos'])->name('equipos');
Route::post('/registrar_equipo', [EquiposController::class, 'registrar_equipo'])->name('registrar_equipo');
Route::post('/habilitacion_equipo', [EquiposController::class, 'habilitacion_equipo'])->name('habilitacion_equipo');
Route::post('/inhabilitacion_equipo', [EquiposController::class, 'inhabilitacion_equipo'])->name('inhabilitacion_equipo');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO ÁREAS 23/04/2023
Route::get('/areas', [AreaController::class, 'areas'])->name('areas');
Route::post('/registrar_areas', [AreaController::class, 'registrar_areas'])->name('registrar_areas');
Route::post('/actualizar_area', [AreaController::class, 'actualizar_area'])->name('actualizar_area');
Route::post('/habilitacion_area', [AreaController::class, 'habilitacion_area'])->name('habilitacion_area');
Route::post('/inhabilitacion_area', [AreaController::class, 'inhabilitacion_area'])->name('inhabilitacion_area');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO SEDES 23/04/2023
Route::get('/sedes', [SedeController::class, 'sedes'])->name('sedes');
Route::post('/registrar_sedes', [SedeController::class, 'registrar_sedes'])->name('registrar_sedes');
Route::post('/actualizar_sede', [SedeController::class, 'actualizar_sede'])->name('actualizar_sede');
Route::post('/habilitacion_sede', [SedeController::class, 'habilitacion_sede'])->name('habilitacion_sede');
Route::post('/inhabilitacion_sede', [SedeController::class, 'inhabilitacion_sede'])->name('inhabilitacion_sede');


//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PERFIL EMPRESARIAL 23/04/2023
Route::get('/perfil_empresarial', [EmpresaController::class, 'perfil_empresarial'])->name('perfil_empresarial');
Route::post('/registrar_empresas', [EmpresaController::class, 'registrar_empresas'])->name('registrar_empresas');

?>