<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vendedor;

use Validator;
class VendedoresController extends Controller
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
        $vendedores = Vendedor::orderBy('id','ASC')->paginate(2);
        return view('admin.vendedores.index')->with('vendedores', $vendedores);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.vendedores.create');
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
            

            'cod_vend' => 'required|max:10|unique:vendedores',
            'nombre_vend' => 'required|max:255',
            'desc_vend' => 'required|max:100|',
            'direc_vend' => 'required|max:300',
            'telefono_vend' => 'required|max:14',
            'email_vend' => 'required',
            'zona_vend' => 'required',

            ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('admin.vendedores.create')->withErrors($validator)
                        ->withInput();
        }

        $vendedor = new Vendedor($request->all());
        $vendedor->save();
        flash(' El vendedor '.$vendedor->nombre_vend. ' ha sido registrado exitosamente ', 'danger');
        return redirect()->route('admin.vendedores.index');
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

        $vendedor = Vendedor::find($id);
        return view('admin.vendedores.show')->with('vendedor', $vendedor);
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
        
        $vendedor = Vendedor::find($id);
        return view('admin.vendedores.edit')->with('vendedor', $vendedor);
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

        $vendedor = Vendedor::find($id);
        //dd($vendedor);
        $vendedor->cod_vend = $request->cod_vend;
        $vendedor->nombre_vend = $request->nombre_vend;
        $vendedor->desc_vend = $request->desc_vend;
        $vendedor->direc_vend = $request->direc_vend;
        $vendedor->telefono_vend = $request->telefono_vend;
        //$vendedor->zona_vend = $request->zona_cli;
        $vendedor->email_vend = $request->email_cli;
        $vendedor->save();
        flash('Vendedor '.$vendedor->nombre_vend.' modificado exitosamente', 'warning');
        return redirect()->route('admin.vendedores.index');
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
        $vendedor = Vendedor::find($id);
        $vendedor->delete();

        flash('El vendedor '.$vendedor->nombre_vend.' ha sido eliminado exitosamente','warning');
        return redirect()->route('admin.vendedores.index');
    }

}
