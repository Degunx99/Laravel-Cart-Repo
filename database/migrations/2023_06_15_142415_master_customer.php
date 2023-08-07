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
        Schema::create('master_customer', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->string('cust_gender');
            $table->string('cust_address');
            $table->date('cust_birthday');
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
        //dijalankan menggunakan php artisan rollback
        Schema::dropIfExists('master_customer');
    }
};
