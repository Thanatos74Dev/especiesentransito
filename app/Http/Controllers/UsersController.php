<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //MÉTODO PARA LA FUNCIONALIDAD DE CREACIÓN DE USUARIOS 01/11/2023
    public function registrar_usuario(){
        $hoy = date("Y-m-d");
        $pass = '$2y$10$0uW.ly/h3YKM.YJXslsYru6iIMYdXk839yeaMlnAtDowPKJ1Rq8BG';

        $datos = request();
        DB::table('users')
        ->insert(['name' => $datos['nombre'],
                'email' => $datos['correo'],
                'password' => $pass,
                'created_at' => $hoy,
                'updated_at' => $hoy]);
            
        return redirect('usuarios');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE LISTADO DE USUARIOS REGISTRADOS EN LA PLATAFORMA 01/11/2023
    public function usuarios(Request $request){
        $data = DB::table('users')->get();
        return view('usuarios', ['data' => $data]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE CONSULTA DE USUARIO ESPECÍFICO LOGUEADO EN LA PALTAFORMA 01/11/2023
    public function consulta_usuario_especifico(Request $request){
        $usuario = auth()->user();

        $data = DB::table('users')
        ->where('id', '=', auth()->id())
        ->get();

        return view('perfil', ['data' => $data]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE ACTUALIZACIÓN DE USUARIO LOGUEADO EN LA PLATAFORMA 01/11/2023
    public function actualizar_usuario(Request $request){
        $datos = request();
        DB::table('users')
        ->where('id', '=', auth()->id())
        ->update(
            ['name' => $datos->nombre,
            'email' => $datos->correo]);

        return redirect('perfil');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE ACTUALIZACIÓN DE USUARIO ESPECÍFICO 01/11/2023
    public function actualizar_usuario_especifico(Request $request){
        $datos = request();
        DB::table('users')
        ->where('id', '=', $datos['id'])
        ->update(
            ['name' => $datos->nombre,
            'email' => $datos->correo]);

        return redirect('usuarios');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE RESTABLECIMIENTO DE CONTRASEÑA 01/11/2023
    public function restablecer_contrasena(Request $request){
        $datos = request();

        $password_hash = password_hash($datos->contrasena, PASSWORD_DEFAULT);

        DB::table('users')
        ->where('id', '=', auth()->id())
        ->update(
            ['password' => $password_hash]);

        return redirect('contrasena');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE CONSULTA DE USUARIO ESPECÍFICO PARA EDICIÓN 01/11/2023
    public function usuario_especifico($id){
        $data = DB::table('users')
        ->where('id', '=', $id)
        ->get();
        return view('usuario_especifico', ['data' => $data]);
    }
}

?>