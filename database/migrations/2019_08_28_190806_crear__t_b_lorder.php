<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tborder', function (Blueprint $table) {
            $table->Increments('tborderid');
            $table->integer('tborderidclient');
            $table->Text('tborderdescription',500);
            $table->decimal('tbordertotalprice', 10, 2)->default(0,00);
            $table->integer('tbordermethodpay');
            $table->boolean('tborderestadepay')->default(false);
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
        Schema::dropIfExists('tborder');
    }
}
