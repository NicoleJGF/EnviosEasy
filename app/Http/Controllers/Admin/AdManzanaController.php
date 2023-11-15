<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\manzana;
use App\Models\sector;
use Illuminate\Http\Request;

class AdManzanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$sectors = sector::pluck('nombre','id');
        $manzanas = manzana::all();
        return view('admin.manzana.index', compact('manzanas'));
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
        return view('admin.manzana.create', compact('sector_id'));
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
        manzana::create($request->all());
        return redirect()->route('admin.manzana.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(manzana $manzana)
    {
        //
        return view('admin.manzana.show', compact('manzana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(manzana $manzana)
    {
        //
        $sector_id = sector::where('estado', '1')->pluck('abreviatura', 'id');
        
        return view('admin.manzana.edit', compact('manzana', 'sector_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manzana $manzana)
    {
        //
        $request->validate([
            'abreviatura' => 'required',
        ]);

        $manzana->update($request->all());
        $manzana->save();

        return redirect()->route('admin.manzana.edit', $manzana)->with('info', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(manzana $manzana)
    {
        //
        $manzana->delete();
        return view('admin.manzana.index');
    }
}
