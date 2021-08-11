<?php

namespace App\Http\Controllers;

use App\Models\tipo_evaluacion;
use Illuminate\Http\Request;

class TipoEvaluacionController extends Controller
{
    public function index()
    {
        //devuelve industrias con estado 1
        $tipo_evaluacion = tipo_evaluacion::all();
        return response()->json($tipo_evaluacion,200);
    }

    //creamos la industria
    public function store(Request $request)
    {
        //validamos el formulario
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);

        $tipo_evaluacion = new tipo_evaluacion;
        $tipo_evaluacion->tipo_evaluacion_nombre = $request->txtNombre;
        $tipo_evaluacion->tipo_evaluacion_estado_id = $request->cboEstado;
        $tipo_evaluacion->save();
        return redirect()->route('tipo_evaluacion.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_evaluacion = tipo_evaluacion::find($id);
        //manda a la vista industria.show le pasamos la variable $ind
        return view('tipo_evaluacion.show',compact('tipo_evaluacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //validamos que tenga datos
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);
 
        $tipo_evaluacion = tipo_evaluacion::find($id);
        $tipo_evaluacion->tipo_evaluacion_nombre = $request->txtNombre;
        $tipo_evaluacion->tipo_evaluacion_estado_id = $request->cboEstado;
        $tipo_evaluacion->save();
        //return response()->json($tipo_evaluacion,200);
        return redirect()->route('tipo_evaluacion.main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_evaluacion = tipo_evaluacion::find($id);
        if(is_null($tipo_evaluacion)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }
        $tipo_evaluacion->delete();
        return redirect()->route('tipo_evaluacion.main');
    }

    public function edit($id){
        $tipo_evaluacion = tipo_evaluacion::find($id);
        //return $tipo_evaluacion;
        return view('tipo-evaluacion-editar',compact('tipo_evaluacion'));
    }

}
