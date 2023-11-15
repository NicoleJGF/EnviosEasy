<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cuadra;
use App\Models\jiron;
use Illuminate\Http\Request;

class AdCuadraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cuadras = cuadra::all();
        return view('admin.cuadra.index', compact('cuadras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jiron_id = jiron::where('estado', '1')->pluck('abreviatura', 'id');
        return view('admin.cuadra.create', compact('jiron_id'));
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
        $request->validate([
            'abreviatura' => 'required',
        ]);

        //$sector = , $sector
        $cuadra = cuadra::create($request->all());
        $cuadra->save();

        /*
        $cuadra = new Cuadra();
        $cuadra->cuadra_id = $cuadra->id;
        $cuadra->slugc = $request->input('slugc');
        $cuadra->abreviaturac = $request->input('abreviaturac');
        $cuadra->estadoc = $request->input('estadoc');
        $cuadra->descripcionc = $request->input('descripcionc');
        $cuadra->save();*/

        return redirect()->route('admin.cuadra.edit', $cuadra);
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
    public function edit(cuadra $cuadra)
    {
        //
        $jiron_id = jiron::where('estado', '1')->pluck('abreviatura', 'id');
        return view('admin.cuadra.edit', compact('cuadra', 'jiron_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuadra $cuadra)
    {
        //
        $request->validate([
            'abreviatura' => 'required',
        ]);

        $cuadra->update($request->all());
        $cuadra->save();

        return redirect()->route('admin.cuadra.edit', $cuadra)->with('info', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuadra $cuadra)
    {
        //
        $cuadra->delete();
        return view('admin.cua$cuadra.index');
    }
}
