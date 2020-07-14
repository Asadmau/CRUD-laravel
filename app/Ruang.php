<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ruang extends Model
{
    //
    protected $table = 'mk_ruang';
    public $timestamps = false;



    public function up()
    {
        Schema::connection('mysql')->create('mk_ruang', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_ruang');
            $table->text('ketruang');
        });
    }
    protected $fillable = [
        'nama_ruang',
        'ketruang',
    ];
}