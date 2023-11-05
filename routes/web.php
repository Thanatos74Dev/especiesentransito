<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MensajeroController;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\DespachoController;

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

//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO USUARIO 01/11/2023
Route::post('registrar_usuario', [UsersController::class, 'registrar_usuario'])->name('registrar_usuario');
Route::get('usuarios', [UsersController::class, 'usuarios'])->name('usuarios');
Route::post('actualizar_usuario', [UsersController::class, 'actualizar_usuario'])->name('actualizar_usuario');
Route::get('contrasena', [HomeController::class, 'contrasena'])->name('contrasena')->name('contrasena');
Route::post('restablecer_contrasena', [UsersController::class, 'restablecer_contrasena'])->name('restablecer_contrasena');
Route::get('perfil', [UsersController::class, 'consulta_usuario_especifico'])->name('consulta_usuario_especifico');
Route::get('usuario_especifico/{id}', [UsersController::class, 'usuario_especifico'])->name('usuario_especifico');
Route::post('actualizar_usuario_especifico', [UsersController::class, 'actualizar_usuario_especifico'])->name('actualizar_usuario_especifico');

//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PROVEEDORES 01/11/2023
Route::get('/mensajeros', [MensajeroController::class, 'mensajeros'])->name('mensajeros');
Route::post('/registrar_mensajero', [MensajeroController::class, 'registrar_mensajero'])->name('registrar_mensajero');
Route::post('/actualizar_mensajero', [MensajeroController::class, 'actualizar_mensajero'])->name('actualizar_mensajero');
Route::post('/habilitacion_mensajero', [MensajeroController::class, 'habilitacion_mensajero'])->name('habilitacion_mensajero');
Route::post('/inhabilitacion_mensajero', [MensajeroController::class, 'inhabilitacion_mensajero'])->name('inhabilitacion_mensajero');

//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO PUNTOS DE ATENCIÓN 08/11/2023
Route::get('/puntos', [PuntoController::class, 'puntos'])->name('puntos');
Route::post('/registrar_punto', [PuntoController::class, 'registrar_punto'])->name('registrar_punto');
Route::post('/actualizar_punto', [PuntoController::class, 'actualizar_punto'])->name('actualizar_punto');
Route::post('/habilitacion_punto', [PuntoController::class, 'habilitacion_punto'])->name('habilitacion_punto');
Route::post('/inhabilitacion_punto', [PuntoController::class, 'inhabilitacion_punto'])->name('inhabilitacion_punto');

//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO ESPECIES 08/11/2023
Route::get('/especies', [EspecieController::class, 'especies'])->name('especies');
Route::post('/registrar_especie', [EspecieController::class, 'registrar_especie'])->name('registrar_especie');
Route::post('/actualizar_especie', [EspecieController::class, 'actualizar_especie'])->name('actualizar_especie');
Route::post('/habilitacion_especie', [EspecieController::class, 'habilitacion_especie'])->name('habilitacion_especie');
Route::post('/inhabilitacion_especie', [EspecieController::class, 'habilitacion_especie'])->name('habilitacion_especie');

//ENRUTAMIENTO DE FUNCIONALIDADES PARA EL MÓDULO DESPACHOS 08/11/2023
Route::get('/despachos', [DespachoController::class, 'despachos'])->name('despachos');
Route::post('/registrar_despacho', [DespachoController::class, 'registrar_despacho'])->name('registrar_despacho');
Route::post('/actualizar_despacho', [DespachoController::class, 'actualizar_despacho'])->name('actualizar_despacho');
Route::post('/habilitacion_despacho', [DespachoController::class, 'habilitacion_despacho'])->name('habilitacion_despacho');
Route::post('/inhabilitacion_despacho', [DespachoController::class, 'inhabilitacion_despacho'])->name('inhabilitacion_despacho');

?>