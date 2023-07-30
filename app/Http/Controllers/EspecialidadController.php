<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspecialidadController extends Controller
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
    public function registrar_especialidades()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('especialidades')
        ->insert(['esp_nombre' => $datos['nombre'],
                'esp_descripcion' => $datos['descripcion'],
                'esp_estado' => 1,
                'esp_fecha_registro' => $hoy]);
            
        return redirect('especialidades');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function especialidades(Request $request)
    {
        $data = DB::table('especialidades')->get();
        return view('especialidades', ['data' => $data]);
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
    public function actualizar_especialidad()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('especialidades')
            ->where('esp_id', '=', $datos['id'])
            ->update(['esp_nombre' => $datos['nombre'],
                'esp_descripcion' => $datos['descripcion']
            ]);
            
        return redirect('especialidades');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PROVEEDORES 29/07/2023
    public function inhabilitacion_especialidad()
    {
        $datos = request()->except('_token');
        DB::table('especialidades')
        ->where('esp_id', '=', $datos['id3'])
        ->update([
            'esp_estado' => 2
        ]);

        return redirect('especialidades');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PROVEEDORES 29/07/2023
     public function habilitacion_especialidad()
     {
        $datos = request()->except('_token');
        DB::table('especialidades')
        ->where('esp_id', '=', $datos['id2'])
        ->update([
            'esp_estado' => 1
        ]);
 
         return redirect('especialidades');
     }

}
