<?php

namespace App\Http\Controllers;

use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Ruang::all();
        return view('ruang/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ruang/tambah');
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
            'nama_ruang' => 'required',
            'ketruang' => 'required'
        ]);
        $dbbarang = new Ruang();
        $dbbarang->id = $request->id;
        $dbbarang->nama_ruang = $request->nama_ruang;
        $dbbarang->ketruang = $request->ketruang;
        $dbbarang->save();
        return redirect()->route('ruang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Ruang::findOrFail($id);
        return view('ruang/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_ruang' => 'required',
            'ketruang' => 'required'
        ]);
        Ruang::whereId($id)->update($dbbarang);
        return redirect('/ruang')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Ruang::findOrFail($id);
        $dbbarang->delete();

        return redirect('/ruang')->with('success', 'successfully deleted');
    }
}