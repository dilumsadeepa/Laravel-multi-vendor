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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('pimg');
            $table->string('pvideo')->nullable();
            $table->string('pprice');
            $table->text('pdis');
            $table->text('pshort');
            $table->string('pshopid');
            $table->string('psubcat');
            $table->string('pcatid');
            $table->string('dop');
            $table->string('pqun');
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
        Schema::dropIfExists('products');
    }
};
