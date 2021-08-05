<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Naturaleza;

class NaturalezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Naturaleza::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos el formulario
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);

        //creamos una naturaleza
        $naturaleza = new naturaleza();

        $naturaleza->naturaleza_nombre = $request->txtNombre;
        $naturaleza->naturaleza_estado_id = $request->cboEstado;
        //lo guardamos
        $naturaleza->save();
        //redirigimos a la pagina categorias
        return redirect('/naturaleza');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Naturaleza::where('id',$id)->first();
        return response()->json($data,200);
    }
    public function edit($id)
    {
        $naturaleza=Naturaleza::findOrFail($id);
        return view ("naturaleza-editar",compact("naturaleza"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validamos que tenga datos
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);
        //buscamos la naturaleza por id
        $naturaleza = naturaleza::find($id);
        //le pasamos los datos
        $naturaleza->naturaleza_nombre = $request->txtNombre;
        $naturaleza->naturaleza_estado_id = $request->cboEstado;
        //lo guardamos
        $naturaleza->save();
        return response()->json($naturaleza,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscamos la industria por id
        $naturaleza = naturaleza::find($id);


        if(is_null($naturaleza)){
            return response() ->json('Registro no encontrado', 404) ;
        }

        //eliminamos la industria
        $naturaleza->delete();
        return redirect('/naturaleza');
    }
}
