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
    public function home()
    {

        $data = DB::table('users')->count();

        $data1 = DB::table('equipos')->count();

        $data2 = DB::table('proveedores')->count();

        $data3 = DB::table('fabricantes')->get();

        return view('home', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }

    
    public function mantenimientos()
    {
        return view('mantenimientos');
    }
    public function complejidad()
    {
        return view('complejidad');
    }


    public function perfil()
    {
        return view('perfil');
    }
    public function contrasena()
    {
        return view('contrasena');
    }


    public function perfil_empresarial()
    {
        return view('perfil_empresarial');
    }
}

?>