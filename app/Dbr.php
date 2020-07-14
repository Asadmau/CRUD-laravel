<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dbr extends Model
{
    //
    protected $table = 'mk_dbr';
    public $timestamps = false;



    public function up()
    {
        Schema::connection('mysql')->create('mk_dbr', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_dbr');
            $table->text('ketdbr');
        });
    }
    protected $fillable = [
        'nama_dbr',
        'ketdbr',
    ];
}