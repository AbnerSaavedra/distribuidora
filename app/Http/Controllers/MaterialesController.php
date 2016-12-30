<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Material;

use Validator;

use Storage;

use Input;

use Image;

use Laracasts\Flash\FlashServiceProvider;

class MaterialesController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $materiales = Material::Codmat($request->get('cod_mat'))->orderBy('id','ASC')->paginate(10);
        //$materiales = Material::orderBy('id','ASC')->paginate(2);
        return view('admin.materiales.index')->with('materiales', $materiales);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.materiales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$material = new Material($request->all());
        dd($material);
        $img = $request->file('foto');
        $img_route = time().'_'.$img->getClientOriginalName();
        dd($img_route);*/


        $validator = Validator::make($request->all(),[
            

            'cod_mat' => 'required|max:10|unique:materiales',
            'desc_mat' => 'required|max:255',
            'dpto' => 'required|max:100|',
            'path' => 'image|required',
            'detalles' => 'required|max:300',
            'cantidad_venta' => 'required',
            'existencia' => 'required',
            'precio_venta' => 'required',
            

            ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('admin.materiales.create')->withErrors($validator)
                        ->withInput();
        }

        /*$path = $request->file('path');
        $name = time()->second.'_'.$path->getClientOriginalName();
        Storage::disk('local')->put($name, file_get_contents($path->getRealPath()));*/
        $material = new Material($request->all());
        $existencia = $request->existencia;
        $material->existencia = $existencia;
        //$material->foto = $name;
        $material->save();
        flash(' El material '.$material->cod_mat. ' ha sido registrado exitosamente ', 'success');
        return redirect()->route('admin.materiales.index');
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

        $material = Material::find($id);
        $img = $material->foto;
        return view('admin.materiales.show')->with('material', $material, 'img', $img);
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
        
        $material = material::find($id);
        return view('admin.materiales.edit')->with('material', $material);
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

        $material = material::find($id);
        //dd($material);
        $material->cod_mat = $request->cod_mat;
        $material->desc_mat = $request->desc_mat;
        $material->dpto = $request->dpto;
        $material->path = $request->path;
        $material->detalles = $request->detalles;
        $material->cantidad_venta = $request->cantidad_venta;
        $material->precio_venta = $request->precio_venta;
        $material->existencia = $request->existencia;
        $material->save();
        flash('Material '.$material->cod_mat.' modificado exitosamente', 'success');
        return redirect()->route('admin.materiales.index');
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
        $material = Material::find($id);
        $material->delete();

        flash('El material '.$material->cod_mat.' ha sido eliminado exitosamente','warning');
        return redirect()->route('admin.materiales.index');
    }

}
