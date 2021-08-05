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
        return datatables()->of(industria::all())->toJson();
    }

    public function tipo_documento()
    {
        return datatables()->of(tipo_documento::all())->toJson();
    }

    public function tipo_evaluacion(){
        return datatables()->of(tipo_evaluacion::all())->toJson();
    }

    public function categoria(){
        return datatables()->of(categoria::all())->toJson();
    }

    public function naturaleza(){
        return datatables()->of(naturaleza::all())->toJson();
    }

    public function industria2()
    {
        return datatables()->of(industria::all())->toJson();
    }
}
