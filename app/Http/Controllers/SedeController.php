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
