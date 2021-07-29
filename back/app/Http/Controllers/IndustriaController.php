<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\industria;
class IndustriaController extends Controller
{
    public function index()
    {
        //devuelve industrias con estado 1
        $industrias = industria::where('industria_estado_id',1)->get();
        return response()->json($industrias,200);

    }

    //creamos la industria
    public function store(Request $request)
    {
        //validamos el formulario
        $request->validate([
            'txtNombre' => 'required',
            'cboEstado' => 'required'
        ]);

        //creamos una industria
        $ind = new industria;

        $ind->industria_nombre = $request->txtNombre;
        $ind->industria_estado_id = $request->cboEstado;
        //lo guardamos
        $ind->save();
        //redirigimos a la pagina industrias
        return redirect()->route('industrias.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ind = industria::find($id);
        //manda a la vista industria.show le pasamos la variable $ind
        return view('industria.show',compact('ind'));
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
        //buscamos la industria por id
        $industria = industria::find($id);
        //le pasamos los datos
        $industria->industria_nombre = $request->txtNombre;
        $industria->industria_estado_id = $request->cboEstado;
        //lo guardamos
        $industria->save();
        return response()->json($industria,200);
        
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
        $ind = industria::find($id);
        if(is_null($ind)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }
        //eliminamos la industria
        $ind->delete();
        return redirect()->route('industrias.main');
    }

    
    public function paginate(Request $request){
        //numero registro por pagina
        $limit = $request->limit;
        //pagina -1
        $offset = $request->offset;
        

        $query = industria::offset($offset*$limit)->take($limit)->get();
        return response()->json($query,200);
    }
}

