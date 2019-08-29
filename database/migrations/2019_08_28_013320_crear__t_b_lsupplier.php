<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLsupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbsupplier', function (Blueprint $table) {
            $table->Increments('tbsupplierid');
            $table->string('tbsuppliername');
            $table->boolean('tbsupplieractive')->default(false);
            $table->string('tbsupplierkey',5);
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
        Schema::dropIfExists('tbsupplier');
    }
}
