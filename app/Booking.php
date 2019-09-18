<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = "bookings";
    protected $fillable = ["nama_peminjam", "hari_sewa", "total_sewa"];
}
