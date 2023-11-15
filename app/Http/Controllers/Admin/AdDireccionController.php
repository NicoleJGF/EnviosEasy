<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cuadra;
use App\Models\direccionn;
use App\Models\manzana;
use App\Models\sector;
use Illuminate\Http\Request;

class AdDireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $direccions = direccionn::all();
        return view('admin.direccion.index', compact('direccions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(direccionn $direccion)
    {
        $cuadra_id = cuadra::where('estado', '1')->get();
        $manzana_id = manzana::where('estado', '1')->get();
        ///
        $sector = sector::where('estado', '1')->get();
        return view('admin.direccion.edit', compact('direccion','sector','cuadra_id','manzana_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direccionn $direccion)
    {
        //
        $request->validate([
            'abreviatura' => 'required',
        ]);

        $direccion->update($request->all());
        
        $direccion->save();

        return redirect()->route('admin.direccion.edit', $direccion)->with('info', 'Actualizado');
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
    }
}
