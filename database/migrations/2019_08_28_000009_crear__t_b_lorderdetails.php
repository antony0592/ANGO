<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLorderdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tborderdetails', function (Blueprint $table) {
            $table->integer('tborderdetailsidorder')->unsigned();
            $table->integer('tdorderidproduct')->unsigned();
            $table->integer('tborderdetailsquantity')->default(0);
            $table->timestamps();

            $table->foreign('tborderdetailsidorder', 'fk_order_id')->references('tborderid')->on('tborder')->onDelete('no action')->onUpdate('no action');
            $table->foreign('tdorderidproduct', 'fk_product_id')->references('tbproductid')->on('tbproduct')->onDelete('no action')->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tborderdetails');
    }
}
