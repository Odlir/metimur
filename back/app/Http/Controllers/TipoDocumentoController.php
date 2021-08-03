<?php

namespace App\Http\Controllers;

use App\Models\tipo_documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        //devuelve industrias con estado 1
        $tipo_documento = tipo_documento::all();
        return response()->json($tipo_documento,200);

    }

    public function store(Request $request)
    {
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);

        $tipo_documento = new tipo_documento;
        $tipo_documento->tipo_documento_nombre = $request->txtNombre;
        $tipo_documento->tipo_documento_estado_id = $request->cboEstado;
        $tipo_documento->save();
        return redirect()->route('tipo_documento.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_documento = tipo_documento::find($id);
        return view('tipo_documento.show',compact('tipo_documento'));
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
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);
 
        $tipo_documento = tipo_documento::find($id);
        $tipo_documento->tipo_documento_nombre = $request->txtNombre;
        $tipo_documento->tipo_documento_estado_id = $request->cboEstado;
        $tipo_documento->save();
        return response()->json($tipo_documento,200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_documento = tipo_documento::find($id);
        if(is_null($tipo_documento)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }
        $tipo_documento->delete();
        return redirect()->route('tipo_documento.main');
    }
}
