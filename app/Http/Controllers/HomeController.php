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

        $data1 = DB::table('mensajeros')->count();

        return view('home', ['data' => $data, 'data1' => $data1]);
    }

    public function perfil()
    {
        return view('perfil');
    }
    public function contrasena()
    {
        return view('contrasena');
    }

}

?>