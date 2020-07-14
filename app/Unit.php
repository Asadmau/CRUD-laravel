<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table = 'unit_poliwangi';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_unit',
        'ketunit'
    ];
}