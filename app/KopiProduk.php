<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KopiProduk extends Model
{
    //
    public $timestamps = false;
    protected $table = 'copy_produk';
    const CREATED_AT = 'add_date';
    const UPDATED_AT = 'updated_date';

    protected $fillable = [
        'kode_produk',
        'kode_dbr',
        'kode_dbl',
        'kode_unit',
        'kode_kondisi',
        'kode_ruang',
        'tgl_perolehan',
        'thpengadaan',
        'ketproduk',
        'nama_pengadaan',
        'tgl_pembuka',
        'harga',
    ];
}