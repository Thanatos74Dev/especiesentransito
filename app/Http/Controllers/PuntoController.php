<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntoController extends Controller
{
     //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE NUEVOS PUNTOS DE ATENCIÓN 08/11/2023
     public function registrar_punto(){
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('puntosatencion')
        ->insert(['pun_nombre' => $datos['nombre'],
                'pun_correo' => $datos['correo'],
                'pun_telefono' => $datos['telefono'],
                'pun_direccion' => $datos['direccion'],
                'pun_estado' => 1,
                'pun_fecha_registro' => $hoy]);
            
        return redirect('puntos');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE LISTADO DE PUNTOS DE ATENCIÓN REGISTRADOS EN LA PLATAFORMA 08/11/2023
    public function puntos(Request $request){
        $data = DB::table('puntosatencion')->get();
        return view('puntos', ['data' => $data]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE EDICIÓN DE PUNTOS DE ATENCIÓN 08/11/2023
    public function actualizar_punto(){
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('puntosatencion')
            ->where('pun_id', '=', $datos['id'])
            ->update(['pun_nombre' => $datos['nombre'],
                'pun_correo' => $datos['correo'],
                'pun_telefono' => $datos['telefono'],
                'pun_direccion' => $datos['direccion']
            ]);
            
        return redirect('puntos');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PUNTOS DE ATENCIÓN 08/11/2023
    public function inhabilitacion_punto(){
        $datos = request()->except('_token');
        DB::table('puntosatencion')
        ->where('pun_id', '=', $datos['id3'])
        ->update([
            'pun_estado' => 2
        ]);

        return redirect('puntos');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE MENSAJEROS 01/11/2023
     public function habilitacion_punto(){
        $datos = request()->except('_token');
        DB::table('puntosatencion')
        ->where('pun_id', '=', $datos['id2'])
        ->update([
            'pun_estado' => 1
        ]);
 
         return redirect('puntos');
     }
}

?>
