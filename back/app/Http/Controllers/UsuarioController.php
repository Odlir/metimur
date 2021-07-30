<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Usuario::all();
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Usuario::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return response()->json($user,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Usuario::where('id',$id)->first();
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
        $user=Usuario::find($id);
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = bcrypt($request->password);


        $user->update();
        $user->save();


        return $this->show($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Usuario::find($id);
        $user->delete();
        return response() ->json('ELIMINACION EXITOSA', 200) ;

    }

    public function authenticate( Request $request)
    {

        $credentials = request()->only('email','password');
        if(Auth::attempt($credentials)){

            return redirect('/encuestas');

        }
        return redirect('/');


    }
}
