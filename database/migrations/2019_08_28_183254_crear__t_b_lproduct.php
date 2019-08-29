<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbproduct', function (Blueprint $table) {
            $table->increments('tbproductid');
            $table->integer('tbproductidsupplier')->unsigned();
            $table->integer('tbproductidcategory')->unsigned(); 
            $table->string('tbproductname',45);
            $table->decimal('tbproductprice', 10, 2)->default(0,00);
            $table->boolean('tbproductactive')->default(false);
            $table->integer('tbproductvisits');
            $table->integer('tbproductstock');  
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
        Schema::dropIfExists('tbproduct');
    }
}
