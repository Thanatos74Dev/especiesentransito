<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquiposController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function equipos(Request $request)
    {
        $data = DB::table('equipos')->get();

        $data1 = DB::table('fabricantes')->get();

        $data2 = DB::table('especialidades')->get();

        $data3 = DB::table('riesgos')->get();

        $data4 = DB::table('periodicidad')->get();

        return view('equipos', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
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
