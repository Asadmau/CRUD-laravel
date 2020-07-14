<?php

namespace App\Http\Controllers;

use App\KopiProduk;
use Illuminate\Http\Request;

class KopiProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = KopiProduk::all();
        return view('kopiproduk/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kopiproduk/tambah');
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
            'kode_produk' => 'required',
            'kode_dbr' => 'required',
            'kode_dbl' => 'required',
            'kode_unit' => 'required',
            'kode_kondisi' => 'required',
            'kode_ruang' => 'required',
            'tgl_perolehan' => 'required',
            'thpengadaan' => 'required',
            'ketproduk' => 'required',
            'nama_pengadaan' => 'required',
            'tgl_pembuka' => 'required',
            'harga' => 'required',
        ]);
        $dbbarang = new KopiProduk();
        $dbbarang->id = $request->id;
        $dbbarang->kode_produk = $request->kode_produk;
        $dbbarang->kode_dbr = $request->kode_dbr;
        $dbbarang->kode_dbl = $request->kode_dbl;
        $dbbarang->kode_unit = $request->kode_unit;
        $dbbarang->kode_kondisi = $request->kode_kondisi;
        $dbbarang->kode_ruang = $request->kode_ruang;
        $dbbarang->tgl_perolehan = $request->tgl_perolehan;
        $dbbarang->thpengadaan = $request->thpengadaan;
        $dbbarang->ketproduk = $request->ketproduk;
        $dbbarang->nama_pengadaan = $request->nama_pengadaan;
        $dbbarang->tgl_pembuka = $request->tgl_pembuka;
        $dbbarang->harga = $request->harga;
        $dbbarang->save();
        return redirect()->route('kopiproduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KopiProduk  $kopiProduk
     * @return \Illuminate\Http\Response
     */
    public function show(KopiProduk $kopiProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KopiProduk  $kopiProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = KopiProduk::findOrFail($id);
        return view('kopiproduk/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KopiProduk  $kopiProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'kode_produk' => 'required',
            'kode_dbr' => 'required',
            'kode_dbl' => 'required',
            'kode_unit' => 'required',
            'kode_kondisi' => 'required',
            'kode_ruang' => 'required',
            'tgl_perolehan' => 'required',
            'thpengadaan' => 'required',
            'ketproduk' => 'required',
            'nama_pengadaan' => 'required',
            'tgl_pembuka' => 'required',
            'harga' => 'required',
        ]);
        KopiProduk::whereId($id)->update($dbbarang);
        return redirect('/kopiproduk')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KopiProduk  $kopiProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = KopiProduk::findOrFail($id);
        $dbbarang->delete();

        return redirect('/kopiproduk')->with('success', 'successfully deleted');
    }
}