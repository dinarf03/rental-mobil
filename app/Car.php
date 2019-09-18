<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "cars";
    protected $fillable = ["nama_mobil", "merk", "bahan_bakar", "plat_nomor", "warna",
   "jumlah", "harga_sewa"];
}
