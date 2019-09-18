<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_mobil', 100);
          $table->string('merk', 100);
          $table->string('bahan_bakar', 100);
          $table->string('plat_nomor', 100);;
          $table->string('warna', 100);
          $table->integer('jumlah');
          $table->integer('harga_sewa');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
