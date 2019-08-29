<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLshoppingcart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbshoppingcart', function (Blueprint $table) {
            $table->Increments('tbshoppingcartid');
            $table->integer('tbshoppingcartiduser');
            $table->integer('tbshoppingcartidproduct');
            $table->integer('tbshoppingcartquantity')->default(0);
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
        Schema::dropIfExists('tbshoppingcart');
    }
}
