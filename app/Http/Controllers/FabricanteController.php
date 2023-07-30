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
                'fab_estado' => 1,
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
    public function actualizar_fabricante(){
        $hoy = date("Y-m-d");

        $datos = request()->except('_token');
        DB::table('fabricantes')
            ->where('fab_id', '=', $datos['id'])
            ->update(['fab_nombre' => $datos['nombre'],
                'fab_url' => $datos['url'],
            ]);
            
        return redirect('fabricantes');
    }

  //MÉTODO PARA LA FUNCIONALIDAD DE INHABILITACIÓN DE PROVEEDORES 29/07/2023
  public function INhabilitacion_fabricante()
  {
      $datos = request()->except('_token');
      DB::table('fabricantes')
      ->where('fab_id', '=', $datos['id3'])
      ->update([
          'fab_estado' => 2
      ]);

      return redirect('fabricantes');
  }

   //MÉTODO PARA LA FUNCIONALIDAD DE HABILITACIÓN DE PROVEEDORES 29/07/2023
   public function habilitacion_fabricante()
   {
      $datos = request()->except('_token');
      DB::table('fabricantes')
      ->where('fab_id', '=', $datos['id2'])
      ->update([
          'fab_estado' => 1
      ]);

       return redirect('fabricantes');
   }
}
