<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\industria;
use App\Models\naturaleza;
use App\Models\tipo_documento;
use App\Models\tipo_evaluacion;
use Illuminate\Http\Request;

class Datatable extends Controller
{
    //
    public function industria()
    {
        return datatables()
        ->of(industria::all())
        ->addColumn('btn','botones.industria-btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function industria2(Request $request)
    {
        $arreglo = $request->ids;
        $nombre = $arreglo[0];
        $estado = $arreglo[1];

        /*
        return response()->json([
            'nombre' => $nombre,
            'estado'=> $estado
        ]); **/
        if($estado){
            return datatables()
        ->of(industria::where('industria_nombre','LIKE',"%$nombre%")->where('industria_estado_id',"$estado")->get())
        ->addColumn('btn','botones.industria-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }else{
            return datatables()
        ->of(industria::where('industria_nombre','LIKE',"%$nombre%")->get())
        ->addColumn('btn','botones.industria-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }

    }
    public function tipo_documento()
    {
        return datatables()
            ->of(tipo_documento::all())
            ->addColumn('btn','botones.tipo-documento-btn')
            ->rawColumns(['btn'])
            ->toJson();
    }
    public function tipo_documento2(Request $request)
    {
        $arreglo = $request->ids;
        $nombre = $arreglo[0];
        $estado = $arreglo[1];

        if($estado){
            return datatables()
        ->of(tipo_documento::where('tipo_documento_nombre','LIKE',"%$nombre%")->where('tipo_documento_estado_id',"$estado")->get())
        ->addColumn('btn','botones.tipo-documento-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }else{
            return datatables()
        ->of(tipo_documento::where('tipo_documento_nombre','LIKE',"%$nombre%")->get())
        ->addColumn('btn','botones.tipo-documento-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }

    }
    public function tipo_evaluacion()
    {
        return datatables()
            ->of(tipo_evaluacion::all())
            ->addColumn('btn','botones.tipo-evaluacion-btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function tipo_evaluacion2(Request $request){
        $arreglo = $request->ids;
        $nombre = $arreglo[0];
        $estado = $arreglo[1];

        if($estado){
            return datatables()
        ->of(tipo_evaluacion::where('tipo_evaluacion_nombre','LIKE',"%$nombre%")->where('tipo_evaluacion_estado_id',"$estado")->get())
        ->addColumn('btn','botones.tipo-evaluacion-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }else{
            return datatables()
        ->of(tipo_evaluacion::where('tipo_evaluacion_nombre','LIKE',"%$nombre%")->get())
        ->addColumn('btn','botones.tipo-evaluacion-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }
    }

    public function categoria()
    {
        return datatables()
            ->of(categoria::all())
            ->addColumn('btn','botones.categoria-btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function categoria2(Request $request){
        $arreglo = $request->ids;
        $nombre = $arreglo[0];
        $estado = $arreglo[1];

        if($estado){
            return datatables()
        ->of(categoria::where('categoria_nombre','LIKE',"%$nombre%")->where('categoria_estado_id',"$estado")->get())
        ->addColumn('btn','botones.categoria-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }else{
            return datatables()
        ->of(categoria::where('categoria_nombre','LIKE',"%$nombre%")->get())
        ->addColumn('btn','botones.categoria-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }


    }
    public function naturaleza()
    {
        return datatables()
            ->of(naturaleza::all())
            ->addColumn('btn','botones.naturaleza-btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function naturaleza2(Request $request){

        $arreglo = $request->ids;
        $nombre = $arreglo[0];
        $estado = $arreglo[1];

        if($estado){
            return datatables()
        ->of(naturaleza::where('naturaleza_nombre','LIKE',"%$nombre%")->where('naturaleza_estado_id',"$estado")->get())
        ->addColumn('btn','botones.naturaleza-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }else{
            return datatables()
        ->of(naturaleza::where('naturaleza_nombre','LIKE',"%$nombre%")->get())
        ->addColumn('btn','botones.categoria-btn')
        ->rawColumns(['btn'])
        ->toJson();
        }
    }

}
