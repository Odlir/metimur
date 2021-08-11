<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categoria::all();
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

        //creamos una categoria
        $categoria = new categoria;

        $categoria->categoria_nombre = $request->txtNombre;
        $categoria->categoria_estado_id = $request->cboEstado;
        //lo guardamos
        $categoria->save();
        //redirigimos a la pagina categorias
        return redirect()->route('categorias.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Categoria::where('id',$id)->first();
        return response()->json($data,200);

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
        //buscamos la industria por id
        $categoria = categoria::find($id);
        //le pasamos los datos
        $categoria->categoria_nombre = $request->txtNombre;
        $categoria->categoria_estado_id = $request->cboEstado;
        //lo guardamos
        $categoria->save();

        return redirect('/categorias');

        //return response()->json($categoria,200);
        return redirect()->route('categorias.main');

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
        $categoria = categoria::find($id);


        if(is_null($categoria)){
            return response() ->json('Registro no encontrado', 404) ;
        }

        //eliminamos la industria
        $categoria->delete();
        return redirect('/categorias');
    }

    public function edit($id){
        $categoria = Categoria::find($id);
        //return $industria;
        return view('categorias-editar',compact('categoria'));
    }
}
