<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //dijalankan menggunakan php artisan migrate
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id');
            $table->integer('id_barang');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('total');
            $table->date('tanggal_jual');
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
        Schema::dropIfExists('penjualan');
    }
};
