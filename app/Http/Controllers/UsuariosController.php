<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Validator;

use Laracasts\Flash\FlashServiceProvider;

class UsuariosController extends Controller
{
    //

	//

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $usuarios = User::orderBy('id','ASC')->paginate(2);
       return view('admin.usuarios.index')->with('usuarios', $usuarios);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|',
            ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('admin.usuarios.create')->withErrors($validator)
                        ->withInput();
        }
        $user = new User($request->all());
        $user->save();
        flash(' El usuario '.$user->name. ' ha sido registrado exitosamente ', 'danger');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = User::find($id);
        //dd($usuario);
        return view('admin.usuarios.edit')->with('usuario', $usuario);
        
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
        //

        //dd($request->all());
        //dd($id);
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        flash('Usuario '.$usuario->name.' modificado exitosamente', 'warning');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //return 'Hola';
        $usuario = User::find($id);
        $usuario->delete();

        flash('El usuario '.$usuario->name. ' ha sido eliminado exitosamente','warning');
        return redirect()->route('admin.usuarios.index');
    }
}
