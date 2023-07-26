<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FabricanteController extends Controller
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
    public function registrar_fabricantes()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('fabricantes')
        ->insert(['fab_nombre' => $datos['nombre'],
                'fab_url' => $datos['url'],
                'fab_fecha_registro' => $hoy]);
            
        return redirect('fabricantes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function fabricantes(Request $request)
    {
        $data = DB::table('fabricantes')->get();
        return view('fabricantes', ['data' => $data]);
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
