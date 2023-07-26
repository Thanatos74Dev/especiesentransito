<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
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
    public function registrar_proveedor()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('proveedores')
        ->insert(['pro_nombre' => $datos['nombre'],
                'pro_correo' => $datos['correo'],
                'pro_telefono' => $datos['telefono'],
                'pro_fecha_registro' => $hoy]);
            
        return redirect('proveedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function proveedores(Request $request)
    {
        $data = DB::table('proveedores')->get();
        return view('proveedores', ['data' => $data]);
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
    public function store(string $id)
    {
        
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
