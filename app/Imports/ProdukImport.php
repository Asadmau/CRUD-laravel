<?php

namespace App\Imports;

use App\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Produk([
            //
            'kd_akun' => $row[1],
            'kd_barang' => $row[2],
            'nub' => $row[3],
            'nama_barang' => $row[4],
            'merk' => $row[5],
            'tgl_perolehan' => $row[6],
            'hrg_perolehan' => $row[7],
            'kd_ruangan' => $row[8],
            'dbr' => $row[9],
            'dbl' => $row[10],
            'kondisi' => $row[11],
            'keterangan' => $row[12],
            'th_pengadaan' => $row[13],
            'nm_pengadaan' => $row[14],
            'unit_png_jawab' => $row[15],
            'qyt' => $row[16],
            'tgl_pembukaan' => $row[17],
            'harga' => $row[18],
            'nm_barang1' => $row[19],
            'spesifikasi' => $row[20]
            // 'status' => $row[21],
        ]);
    }
}