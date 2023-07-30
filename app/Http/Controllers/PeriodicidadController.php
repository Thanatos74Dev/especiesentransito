<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class PeriodicidadController extends Controller
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
    public function registrar_periodicidad()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('periodicidad')
        ->insert(['per_nombre' => $datos['nombre'],
                'per_descripcion' => $datos['descripcion'],
                'per_estado' => 1,
                'per_fecha_registro' => $hoy]);
            
        return redirect('periodicidad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function periodicidad(Request $request)
    {
        $data = DB::table('periodicidad')->get();
        return view('periodicidad', ['data' => $data]);
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
    public function actualizar_periodicidad()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('periodicidad')
            ->where('per_id', '=', $datos['id'])
            ->update(['per_nombre' => $datos['nombre'],
                'per_descripcion' => $datos['descripcion']
            ]);
            
        return redirect('periodicidad');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PERIODICIDAD 29/07/2023
    public function inhabilitacion_periodicidad()
    {
        $datos = request()->except('_token');
        DB::table('periodicidad')
        ->where('per_id', '=', $datos['id3'])
        ->update([
            'per_estado' => 2
        ]);

        return redirect('periodicidad');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PERIODICIDAD 29/07/2023
     public function habilitacion_periodicidad()
     {
        $datos = request()->except('_token');
        DB::table('periodicidad')
        ->where('per_id', '=', $datos['id2'])
        ->update([
            'per_estado' => 1
        ]);
 
         return redirect('periodicidad');
     }
}
