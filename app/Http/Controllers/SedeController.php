<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SedeController extends Controller
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
    public function registrar_sedes()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('sedes')
        ->insert(['sede_nombre' => $datos['nombre'],
                'sede_direccion' => $datos['direccion'],
                'sede_telefono' => $datos['telefono'],
                'sede_estado' => 1,
                'sede_fecha_registro' => $hoy]);
            
        return redirect('sedes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sedes(Request $request)
    {
        $data = DB::table('sedes')->get();
        return view('sedes', ['data' => $data]);
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
    public function actualizar_sede()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('sedes')
            ->where('sede_id', '=', $datos['id'])
            ->update(['sede_nombre' => $datos['nombre'],
                'sede_direccion' => $datos['direccion'],
                'sede_telefono' => $datos['telefono']
            ]);
            
        return redirect('sedes');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE SEDES 29/07/2023
    public function inhabilitacion_sede()
    {
        $datos = request()->except('_token');
        DB::table('sedes')
        ->where('sede_id', '=', $datos['id3'])
        ->update([
            'sede_estado' => 2
        ]);

        return redirect('sedes');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE SEDES 29/07/2023
     public function habilitacion_sede()
     {
        $datos = request()->except('_token');
        DB::table('sedes')
        ->where('sede_id', '=', $datos['id2'])
        ->update([
            'sede_estado' => 1
        ]);
 
         return redirect('sedes');
     }
}
