<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kondisi extends Model
{
    //
    protected $table = 'mk_kondisi';
    public $timestamps = false;



    public function up()
    {
        Schema::connection('mysql')->create('mk_kondisi', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_kondisi');
            $table->text('ketkondisi');
        });
    }
    protected $fillable = [
        'nama_kondisi',
        'ketkondisi',
    ];
}