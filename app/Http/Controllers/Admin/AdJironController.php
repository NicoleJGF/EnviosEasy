<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cuadra;
use App\Models\jiron;
use App\Models\sector;
use Illuminate\Http\Request;

class AdJironController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jirons = jiron::all();
        return view('admin.jiron.index', compact('jirons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sector_id = sector::where('estado', '1')->pluck('abreviatura', 'id');
        return view('admin.jiron.create', compact('sector_id'));
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
        $jiron = jiron::create($request->all());

        /*
        $cuadra = new Cuadra();
        $cuadra->jiron_id = $jiron->id;
        $cuadra->slugc = $request->input('slugc');
        $cuadra->abreviaturac = $request->input('abreviaturac');
        $cuadra->estadoc = $request->input('estadoc');
        $cuadra->descripcionc = $request->input('descripcionc');
        $cuadra->save();*/

        return redirect()->route('admin.jiron.edit', $jiron);
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
    public function edit(jiron $jiron)
    {
        //
        $sector_id = sector::where('estado', '1')->pluck('abreviatura', 'id');
        return view('admin.jiron.edit', compact('jiron', 'sector_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jiron $jiron)
    {
        //
        $request->validate([
            'abreviatura' => 'required',
        ]);

        $jiron->update($request->all());
        $jiron->save();

        return redirect()->route('admin.jiron.edit', $jiron)->with('info', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jiron $jiron)
    {
        //
        $jiron->delete();
        return view('admin.jiron.index');
    }
}
