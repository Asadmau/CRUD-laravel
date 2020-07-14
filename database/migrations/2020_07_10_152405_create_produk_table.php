<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->string('kd_akun')->primary();
            $table->string('kd_barang');
            $table->integer('nub');
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('tgl_perolehan');
            $table->string('hrg_perolehan');
            $table->string('kd_ruangan');
            $table->string('dbr');
            $table->string('dbl')->nullable();
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('th_pengadaan');
            $table->string('nm_pengadaan');
            $table->string('unit_png_jawab');
            $table->integer('qyt');
            $table->integer('tgl_pembukaan');
            $table->integer('harga');
            $table->string('nm_barang1');
            $table->string('spesifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}