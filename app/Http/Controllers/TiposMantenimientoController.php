<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiposMantenimientoController extends Controller
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
    public function registrar_tipos_mantenimientos()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('tipos_mantenimientos')
        ->insert(['tipo_man_nombre' => $datos['nombre'],
                'tipo_man_descripcion' => $datos['descripcion'],
                'tipo_man_fecha_registro' => $hoy]);
            
        return redirect('tipo_mantenimientos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tipo_mantenimientos(Request $request)
    {
        $data = DB::table('tipos_mantenimientos')->get();
        return view('tipo_mantenimientos', ['data' => $data]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
