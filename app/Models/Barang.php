<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'info_barang',
        'kode_barang',
        'harga_barang',
        'stok_barang',
    ];
}
