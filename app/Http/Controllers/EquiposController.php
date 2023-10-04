<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TiposMantenimientoController;
use App\Http\Controllers\PeriodicidadController;

class EquiposController extends Controller
{
    // USO DE LOS TRAITS NECESARIOS PARA LOS PROCESOS DE ESTE CONTROLADOR
    use mantenimientos;
    use periodicidad;
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
    public function registrar_equipo()
    {
        $hoy = date("Y-m-d");

        $datos = request();
        DB::table('equipos')
        ->insert(['equ_nombre' => $datos['nombre'],
                'equ_fabricante' => $datos['fabricante'],
                'equ_referencia' => $datos['referencia'],
                'equ_serie' => $datos['serie'],
                'equ_propiedad' => $datos['propiedad'],
                'equ_activo' => $datos['activo'],
                'equ_especialidad' => $datos['especialidad'],
                'equ_tipo' => $datos['tipo'],
                'equ_riesgo' => $datos['riesgo'],
                'equ_complejidad' => $datos['complejidad'],
                'equ_periodicidad' => $datos['periodicidad'],
                'equ_estado' => 1,
                'equ_fecha_registro' => $hoy]);
            
        $dias = $this->consultar_periodicidad($datos['periodicidad']);
        $dias = intval($dias);
        $fecha_mantenimiento = $hoy + $dias;

        $equipo = $this->consultar_ultimo_equipo();

        $this->registrar_mantenimiento($equipo, $datos['tipo'], $datos['periodicidad'], $fecha_mantenimiento);
        return redirect('equipos');
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

        $data5 = DB::table('complejidades')->get();

        return view('equipos', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5]);
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

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE EQUIPOS BIOMÉDICOS 30/07/2023
    public function inhabilitacion_equipo()
    {
        $datos = request()->except('_token');
        DB::table('equipos')
        ->where('equ_id', '=', $datos['id3'])
        ->update([
            'equ_estado' => 2
        ]);

        return redirect('equipos');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE EQUIPOS BIOMÉDICOS 30/07/2023
    public function habilitacion_equipo()
    {
        $datos = request()->except('_token');
        DB::table('equipos')
        ->where('equ_id', '=', $datos['id2'])
        ->update([
            'equ_estado' => 1
        ]);

        return redirect('equipos');
    }


    //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE MANTENIMIENTOS DURANTE EL REGISTRO DE UN EQUIPO BIOMÉDICO 03/09/2023
     public function consultar_ultimo_equipo()
     {
        $data = DB::table('equipos')
        ->orderByDesc('equ_id')
        ->limit(1)
        ->get();
     }
     
}