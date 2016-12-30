<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dpto;

use Validator;

use Laracast\Flash\FlashServiceProvider;

class DptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dptos = dpto::OrderBy('Id', 'ASC')->paginate(2);
        return view('admin.dptos.index')->with('dptos', $dptos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.dptos.create');
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

         $validator = Validator::make($request->all(),[
            'codigo_dpto' => 'required|max:12|unique:departamento',
            'desc_dpto' => 'required|max:300',
            ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('admin.dptos.create')->withErrors($validator)
                        ->withInput();
        }
        $dpto = new dpto($request->all());
        $dpto->save();
        flash(' El dpto '.$dpto->codigo_dpto. ' ha sido registrado exitosamente ', 'success');
        return redirect()->route('admin.dptos.index');


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
        $dpto = dpto::find($id);
        return view('admin.dptos.edit')->with('dpto', $dpto);
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

        $dpto = dpto::find($id);
        $dpto->codigo_dpto = $request->codigo_dpto;
        $dpto->desc_dpto = $request->desc_dpto;
        $dpto->save();
        flash('Dpto. '.$dpto->codigo_dpto.' modificado exitosamente', 'success');
        return redirect()->route('admin.dptos.index');
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

        $dpto = dpto::find($id);
        $dpto->delete();
        flash('Dpto. '.$dpto->codigo_dpto.' eliminado exitosamente', 'warning');
        return redirect()->route('admin.dptos.index');
    }
}
