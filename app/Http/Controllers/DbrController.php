<?php

namespace App\Http\Controllers;

use App\Dbr;
use Illuminate\Http\Request;

class DbrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Dbr::all();
        return view('dbr/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dbr/tambah');
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

            'nama_dbr' => 'required',
            'ketdbr' => 'required',
        ]);

        $dbbarang = new Dbr();
        $dbbarang->id = $request->id;
        $dbbarang->nama_dbr = $request->nama_dbr;
        $dbbarang->ketdbr = $request->ketdbr;


        $dbbarang->save();
        return redirect()->route('dbr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dbr  $dbr
     * @return \Illuminate\Http\Response
     */
    public function show(Dbr $dbr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dbr  $dbr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Dbr::findOrFail($id);

        return view('dbr/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dbr  $dbr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_dbr' => 'required',
            'ketdbr' => 'required',
        ]);
        Dbr::whereId($id)->update($dbbarang);

        return redirect('/dbr')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dbr  $dbr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Dbr::findOrFail($id);
        $dbbarang->delete();

        return redirect('/dbr')->with('success', 'successfully deleted');
    }
}