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
        Schema::table('penjualan', function (Blueprint $table) {
            $table->unsignedBigInteger('cust_id')->change();
            $table->foreign('cust_id')->references('id')->on('master_customer');

            $table->unsignedBigInteger('id_barang')->change();
            $table->foreign('id_barang')->references('id')->on('master_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penjualan', function (Blueprint $table) {
            $table->dropForeign('cust_id');
            $table->dropForeign('id_barang');
        });
    }
};
