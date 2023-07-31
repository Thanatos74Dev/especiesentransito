<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComplejidadController extends Controller
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
    public function registrar_complejidad()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('complejidades')
        ->insert(['comp_nombre' => $datos['nombre'],
                'comp_descripcion' => $datos['descripcion'],
                'comp_estado' => 1,
                'comp_fecha_registro' => $hoy]);
            
        return redirect('complejidad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function complejidad(Request $request)
    {
        $data = DB::table('complejidades')->get();
        return view('complejidad', ['data' => $data]);
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
    public function actualizar_complejidad()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('complejidades')
            ->where('comp_id', '=', $datos['id'])
            ->update(['comp_nombre' => $datos['nombre'],
                'comp_descripcion' => $datos['descripcion']
            ]);
            
        return redirect('complejidad');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PROVEEDORES 29/07/2023
    public function inhabilitacion_complejidad()
    {
        $datos = request()->except('_token');
        DB::table('complejidades')
        ->where('comp_id', '=', $datos['id3'])
        ->update([
            'comp_estado' => 2
        ]);

        return redirect('complejidad');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PROVEEDORES 29/07/2023
     public function habilitacion_complejidad()
     {
        $datos = request()->except('_token');
        DB::table('complejidades')
        ->where('comp_id', '=', $datos['id2'])
        ->update([
            'comp_estado' => 1
        ]);
 
         return redirect('complejidad');
     }
}
