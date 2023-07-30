<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar_riesgos()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('riesgos')
        ->insert(['riesgo_nombre' => $datos['nombre'],
                'riesgo_descripcion' => $datos['descripcion'],
                'riesgo_estado' => 1,
                'riesgo_fecha_registro' => $hoy]);
            
        return redirect('riesgos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function riesgos(Request $request)
    {
        $data = DB::table('riesgos')->get();
        return view('riesgos', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function actualizar_riesgo()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('riesgos')
            ->where('riesgo_id', '=', $datos['id'])
            ->update(['riesgo_nombre' => $datos['nombre'],
                'riesgo_Descripcion' => $datos['descripcion']
            ]);
            
        return redirect('riesgos');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PROVEEDORES 29/07/2023
    public function inhabilitacion_riesgo()
    {
        $datos = request()->except('_token');
        DB::table('riesgos')
        ->where('riesgo_id', '=', $datos['id3'])
        ->update([
            'riesgo_estado' => 2
        ]);

        return redirect('riesgos');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PROVEEDORES 29/07/2023
     public function habilitacion_riesgo()
     {
        $datos = request()->except('_token');
        DB::table('riesgos')
        ->where('riesgo_id', '=', $datos['id2'])
        ->update([
            'riesgo_estado' => 1
        ]);
 
         return redirect('riesgos');
     }
}
