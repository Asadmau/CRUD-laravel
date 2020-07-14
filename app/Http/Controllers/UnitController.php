<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Unit::all();
        return view('unit/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('unit/tambah');
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
        $dbbarang = $request->validate([
            'nama_unit' => 'required',
            'ketunit' => 'required'
        ]);
        $dbbarang = new Unit();
        $dbbarang->id = $request->id;
        $dbbarang->nama_unit = $request->nama_unit;
        $dbbarang->ketunit = $request->ketunit;
        $dbbarang->save();
        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Unit::findOrFail($id);
        return view('unit/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_unit' => 'required',
            'ketunit' => 'required',
        ]);
        Unit::whereId($id)->update($dbbarang);

        return redirect('/unit')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Unit::findOrFail($id);
        $dbbarang->delete();

        return redirect('/unit')->with('success', 'successfully deleted');
    }
}