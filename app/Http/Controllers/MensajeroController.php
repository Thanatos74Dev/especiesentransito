<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensajeroController extends Controller
{

    //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE NUEVOS MENSAJEROS 01/11/2023
    public function registrar_mensajero()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('mensajeros')
        ->insert(['men_nombre' => $datos['nombre'],
                'men_correo' => $datos['correo'],
                'men_telefono' => $datos['telefono'],
                'men_estado' => 1,
                'men_fecha_registro' => $hoy]);
            
        return redirect('mensajeros');
    }

    public function mensajeros(Request $request)
    {
        $data = DB::table('mensajeros')->get();
        return view('mensajeros', ['data' => $data]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE EDICIÓN DE MENSAJEROS 01/11/2023
    public function actualizar_mensajero()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('mensajeros')
            ->where('men_id', '=', $datos['id'])
            ->update(['men_nombre' => $datos['nombre'],
                'men_correo' => $datos['correo'],
                'men_telefono' => $datos['telefono']
            ]);
            
        return redirect('mensajeros');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE MENSAJEROS 01/11/2023
    public function inhabilitacion_mensajero()
    {
        $datos = request()->except('_token');
        DB::table('mensajeros')
        ->where('men_id', '=', $datos['id3'])
        ->update([
            'men_estado' => 2
        ]);

        return redirect('mensajeros');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE MENSAJEROS 01/11/2023
     public function habilitacion_mensajero()
     {
        $datos = request()->except('_token');
        DB::table('mensajeros')
        ->where('men_id', '=', $datos['id2'])
        ->update([
            'men_estado' => 1
        ]);
 
         return redirect('mensajeros');
     }
}
