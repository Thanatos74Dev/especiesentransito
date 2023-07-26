<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
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
    public function registrar_empresas()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('empresas')
        ->insert(['emp_nombre' => $datos['nombre'],
                'emp_correo' => $datos['correo'],
                'emp_telefono' => $datos['telefono'],
                'emp_direccion' => $datos['direccion'],
                'emp_fecha_registro' => $hoy]);
            
        return redirect('perfil_empresarial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function perfil_empresarial(Request $request)
    {
        $data = DB::table('empresas')->get();
        return view('perfil_empresarial', ['data' => $data]);
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
