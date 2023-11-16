<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //MÉTODO PARA LA FUNCIONALIDAD DE REDIRECCIONAMIENTO AL HOME 01/11/2023
    public function home(){

        $data = DB::table('users')->count();
        $data1 = DB::table('mensajeros')->count();
        $data2 = DB::table('despachos')
        ->where('desp_estado', '=', 1)
        ->count();
        $data3 = DB::table('especies')
        ->where('esp_estado', '=', 1)
        ->count();
        return view('home', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE REDIRECCIONAMIENTO AL PERFIL DE USUARIO 01/11/2023
    public function perfil(){
        return view('perfil');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE REDIRECCIONAMIENTO AL CAMBIO DE CONTRASEÑA DE USUARIO 01/11/2023
    public function contrasena(){
        return view('contrasena');
    }
}

?>