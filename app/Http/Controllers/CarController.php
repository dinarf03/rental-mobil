<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Car;

class CarController extends Controller
{
    //
    public function index(){
      $car=Car::all();
      $data=['car'=>$car];
      return $car;
    }

    public function create(Request $request){
      $car=new Car();
      $car->nama_mobil  =$request->nama_mobil;
      $car->merk        =$request->merk;
      $car->bahan_bakar =$request->bahan_bakar;
      $car->plat_nomor  =$request->plat_nomor;
      $car->warna       =$request->warna;
      $car->jumlah      =$request->jumlah;
      $car->harga_sewa  =$request->harga_sewa;
      $car->save();

      return " Data Tersimpan ";
    }

    public function update(Request $request, $id){
      $car=Car::find($id);
      $car->nama_mobil  =$request->nama_mobil;
      $car->merk        =$request->merk;
      $car->bahan_bakar =$request->bahan_bakar;
      $car->plat_nomor  =$request->plat_nomor;
      $car->warna       =$request->warna;
      $car->jumlah      =$request->jumlah;
      $car->harga_sewa  =$request->harga_sewa;
      $car->save();

      return " Data Terupdate ";
    }

    public function delete($id){
      $car=Car::find($id);
      $car->delete();

      return " Data Terhapus ";
    }


    public function detail($id){
      $car=Car::find($id);
      return $car;
    }
}
