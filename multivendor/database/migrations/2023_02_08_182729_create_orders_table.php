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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('cusid');
            $table->string('productid');
            $table->string('shopid');
            $table->integer('oqun');
            $table->decimal('oprice',8,2);
            $table->string('paymentstatus');
            $table->string('deliver');
            $table->string('streetaddress');
            $table->string('streetaddress2');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->integer('phone');
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
        Schema::dropIfExists('orders');
    }
};
