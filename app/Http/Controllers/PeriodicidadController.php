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
