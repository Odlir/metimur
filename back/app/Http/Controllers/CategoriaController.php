<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

    public function destroyMultiple(Request $request){
        $arreglo = $request->ids;
        //return response()->json($arreglo,200);
        foreach($arreglo as $item){
            $Categoria = Categoria::find($item);
            $Categoria->delete();
        }
        return response()->json($Categoria,200);
        //return redirect()->route('tipo_documento.main');
    }

}
