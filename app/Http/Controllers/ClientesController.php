<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

use Validator;

use Laracasts\Flash\FlashServiceProvider;

class ClientesController extends Controller
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
        //
        //return 'cliente registra exitosamente';
        $clientes = Cliente::orderBy('id','ASC')->paginate(2);
        return view('admin.clientes.index')->with('clientes', $clientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$cliente = new Cliente($request->all());
        dd($cliente);*/


        $validator = Validator::make($request->all(),[
            

            'cod_cli' => 'required|max:10|unique:clientes',
            'nombre_cli' => 'required|max:255',
            'desc_cli' => 'required|max:100|',
            'direc_cli' => 'required|max:300',
            'telefono_cli' => 'required|max:14',
            'email_cli' => 'required',
            'zona_cli' => 'required',

            ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('admin.clientes.create')->withErrors($validator)
                        ->withInput();
        }

        $cliente = new Cliente($request->all());
        $cliente->save();
        flash(' El cliente '.$cliente->nombre_cli. ' ha sido registrado exitosamente ', 'success');
        return redirect()->route('admin.clientes.index');
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

        $cliente = Cliente::find($id);
        return view('admin.clientes.show')->with('cliente', $cliente);
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
        
        $cliente = Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente', $cliente);
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

        $cliente = Cliente::find($id);
        //dd($material);
        $cliente->cod_cli = $request->cod_cli;
        $cliente->nombre_cli = $request->nombre_cli;
        $cliente->desc_cli = $request->desc_cli;
        $cliente->direc_cli = $request->direc_cli;
        $cliente->telefono_cli = $request->telefono_cli;
        //$cliente->zona_cli = $request->zona_cli;
        $cliente->email_cli = $request->email_cli;
        $cliente->save();
        flash('Cliente '.$cliente->nombre_cli.' modificado exitosamente', 'success');
        return redirect()->route('admin.clientes.index');
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
        $cliente = Cliente::find($id);
        $cliente->delete();

        flash('El cliente '.$cliente->cod_cli.' ha sido eliminado exitosamente','warning');
        return redirect()->route('admin.clientes.index');
    }

}
