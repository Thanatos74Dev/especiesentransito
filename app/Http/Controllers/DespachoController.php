<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EspecieController;

use Illuminate\Http\Request;

class DespachoController extends Controller
{
        //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE NUEVAS DESPACHOS 08/11/2023
        public function registrar_despacho(){
            $hoy = date("Y-m-d");
    
            $datos = request();
            DB::table('despachos')
            ->insert(['desp_placa' => $datos['placa'],
                    'desp_punto' => $datos['punto'],
                    'desp_mensajero' => $datos['mensajero'],
                    'desp_fecha_entrega' => $datos['entrega'],
                    'desp_estado' => 1,
                    'desp_fecha_registro' => $hoy]);
                
            //Objeto para instanciar controlador Especies y con esto cambiar el estado de la especie.        
            $especie = new EspecieController();
            $especie->asignar_especie($datos['placa']);
            return redirect('despachos');
        }
    
        //MÉTODO PARA LA FUNCIONALIDAD DE LISTADO DE DESPACHOS REGISTRADOS EN LA PLATAFORMA 08/11/2023
        public function despachos(Request $request){
            //$data = DB::table('despachos')->get();
            $data = DB::table('despachos')
            ->join('especies', 'despachos.desp_placa', '=', 'especies.esp_id')
            ->join('puntosatencion', 'despachos.desp_punto', '=', 'puntosatencion.pun_id')
            ->join('mensajeros', 'despachos.desp_mensajero', '=', 'mensajeros.men_id')
            ->select('despachos.*', 'especies.esp_placa', 'puntosatencion.pun_nombre', 'mensajeros.men_nombre')
            ->get();

            $data1 = DB::table('puntosatencion')
            ->where('pun_estado', '=', 1)
            ->get();
            $data2 = DB::table('mensajeros')
            ->where('men_estado', '=', 1)
            ->get();
            $data3 = DB::table('especies')
            ->where('esp_estado', '=', 1)
            ->get();
            return view('despachos', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
        }
    
        //MÉTODO PARA LA FUNCIONALIDAD DE EDICIÓN DE DESPACHOS 08/11/2023
        public function actualizar_despacho(){
            $hoy = date("Y-m-d");
    
            $datos = request()->except('_token');
            DB::table('despachos')
                ->where('desp_id', '=', $datos['id'])
                ->update(['desp_placa' => $datos['placa'],
                'desp_punto' => $datos['punto'],
                'desp_mensajero' => $datos['mensajero'],
                'desp_fecha_entrega' => $datos['entrega']
                ]);
                
            return redirect('despachos');
        }
    
}

?>