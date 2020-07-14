<?php

namespace App\Http\Controllers;

use App\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Kondisi::all();
        return view('kondisi/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kondisi/tambah');
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
        $dbbarang =  $request->validate([
            'nama_kondisi' => 'required',
            'ketkondisi' => 'required',
        ]);

        $dbbarang = new Kondisi();
        $dbbarang->id = $request->id;
        $dbbarang->nama_kondisi = $request->nama_kondisi;
        $dbbarang->ketkondisi = $request->ketkondisi;


        $dbbarang->save();
        return redirect()->route('kondisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function show(Kondisi $kondisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Kondisi::findOrFail($id);
        return view('kondisi/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_kondisi' => 'required',
            'ketkondisi' => 'required',
        ]);
        Kondisi::whereId($id)->update($dbbarang);

        return redirect('/kondisi')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Kondisi::findOrFail($id);
        $dbbarang->delete();

        return redirect('/kondisi')->with('success', 'successfully deleted');
    }
}