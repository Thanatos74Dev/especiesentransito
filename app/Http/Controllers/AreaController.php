<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
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
    public function registrar_areas()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('areas')
        ->insert(['area_nombre' => $datos['nombre'],
                'area_notas' => $datos['notas'],
                'area_fecha_registro' => $hoy]);
            
        return redirect('areas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function areas(Request $request)
    {
        $data = DB::table('areas')->get();
        return view('areas', ['data' => $data]);
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
    public function actualizar_area()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('areas')
            ->where('area_id', '=', $datos['id'])
            ->update(['area_nombre' => $datos['nombre'],
                'area_notas' => $datos['notas']
            ]);
            
        return redirect('areas');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE ÁREAS 29/07/2023
    public function inhabilitacion_area()
    {
        $datos = request()->except('_token');
        DB::table('areas')
        ->where('area_id', '=', $datos['id3'])
        ->update([
            'area_estado' => 2
        ]);

        return redirect('areas');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE ÁREAS 29/07/2023
     public function habilitacion_area()
     {
        $datos = request()->except('_token');
        DB::table('areas')
        ->where('area_id', '=', $datos['id2'])
        ->update([
            'area_estado' => 1
        ]);
 
         return redirect('areas');
     }
}
