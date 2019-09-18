<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Car;

class BookingController extends Controller
{
    //
    public function total(Request $request, $id){
      $pembayaran = new Booking();

      $pembayaran->nama_peminjam = $request->nama_peminjam;
      $pembayaran->hari_sewa = $request->hari_sewa;

      $hari_sewa = $request->hari_sewa;
      $car = Car::find($id);
      $total_sewa = $car->harga_sewa * $hari_sewa;

      $pembayaran->total_sewa = $total_sewa;
      $pembayaran->save();

      return "Total Bayar Sewa : Rp." . ($total_sewa);

    }
}
