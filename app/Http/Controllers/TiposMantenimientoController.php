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
                'tipo_man_estado' => 1,
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
    public function actualizar_tipo_mantenimiento()    {
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('tipos_mantenimientos')
            ->where('tipo_man_id', '=', $datos['id'])
            ->update(['tipo_man_nombre' => $datos['nombre'],
                'tipo_man_descripcion' => $datos['descripcion']
            ]);
            
        return redirect('tipo_mantenimientos');
    }

    //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PROVEEDORES 29/07/2023
    public function inhabilitacion_tipo_mantenimiento()
    {
        $datos = request()->except('_token');
        DB::table('tipos_mantenimientos')
        ->where('tipo_man_id', '=', $datos['id3'])
        ->update([
            'tipo_man_estado' => 2
        ]);

        return redirect('tipo_mantenimientos');
    }

     //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PROVEEDORES 29/07/2023
     public function habilitacion_tipo_mantenimiento()
     {
        $datos = request()->except('_token');
        DB::table('tipos_mantenimientos')
        ->where('tipo_man_id', '=', $datos['id2'])
        ->update([
            'tipo_man_estado' => 1
        ]);
 
         return redirect('tipo_mantenimientos');
     }


    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
trait mantenimientos{

    //MÉTODO PARA LA FUNCIONALIDAD DE REGISTRO DE MANTENIMIENTOS DURANTE EL REGISTRO DE UN EQUIPO BIOMÉDICO 03/09/2023
     public function registrar_mantenimiento($equipo, $tipo, $periodicidad, $fecha)
     {
         $hoy = date("Y-m-d");

         DB::table('mantenimientos')
         ->insert(['man_equ_id' => $equipo,
                 'man_tipo' => $tipo,
                 'man_periodicidad' => $periodicidad,
                 'man_estado' => 1,
                 'man_fecha_man' => $fecha,
                 'man_fecha_registro' => $hoy]);
     }
     
}
