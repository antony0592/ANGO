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
            $table->integer('tbshoppingcartiduser')->unsigned();
            $table->integer('tbshoppingcartidproduct')->unsigned();
            $table->integer('tbshoppingcartquantity')->default(0);
            $table->timestamps();

           $table->foreign('tbshoppingcartiduser', 'fk_user_id2')->references('tbuserid')->on('tbuser')->onDelete('no action')->onUpdate('no action');
           $table->foreign('tbshoppingcartidproduct', 'fk_product_id2')->references('tbproductid')->on('tbproduct')->onDelete('no action')->onUpdate('no action');

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
