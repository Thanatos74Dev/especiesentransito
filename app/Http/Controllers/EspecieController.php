<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspecieController extends Controller
{
       //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE NUEVAS ESPECIES 08/11/2023
       public function registrar_especie(){
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('especies')
        ->insert(['esp_placa' => $datos['placa'],
                'esp_estado' => 1,
                'esp_fecha_registro' => $hoy]);
            
        return redirect('especies');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE LISTADO DE ESPECIES REGISTRADOS EN LA PLATAFORMA 08/11/2023
    public function especies(Request $request){
        $data = DB::table('especies')->get();
        return view('especies', ['data' => $data]);
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE EDICIÓN DE ESPECIES 08/11/2023
    public function actualizar_especie(){
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('especies')
            ->where('esp_id', '=', $datos['id'])
            ->update(['esp_placa' => $datos['placa']
            ]);
            
        return redirect('especies');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE ESPECIES 08/11/2023
    public function inhabilitacion_especie(){
        $datos = request()->except('_token');
        DB::table('especies')
        ->where('esp_id', '=', $datos['id3'])
        ->update([
            'esp_estado' => 2
        ]);

        return redirect('v');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE ESPECIES 08/11/2023
     public function habilitacion_especie(){
        $datos = request()->except('_token');
        DB::table('especies')
        ->where('esp_id', '=', $datos['id2'])
        ->update([
            'esp_estado' => 1
        ]);
 
         return redirect('especies');
     }
}

?>
