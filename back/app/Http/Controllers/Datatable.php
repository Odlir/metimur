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

    public function tipo_documento()
    {
        return datatables()
        ->of(tipo_documento::all())
        ->addColumn('btn','botones.tipo-documento-btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function tipo_evaluacion(){
        return datatables()
        ->of(tipo_evaluacion::all())
        ->addColumn('btn','botones.tipo-evaluacion-btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function categoria(){
        return datatables()
        ->of(categoria::all())
        ->addColumn('btn','botones.categoria-btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function naturaleza(){
        return datatables()
        ->of(naturaleza::all())
        ->addColumn('btn','botones.naturaleza-btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

}
