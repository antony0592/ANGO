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
            $table->integer('tborderiduser')->unsigned();
            $table->Text('tborderdescription',500);
            $table->decimal('tbordertotalprice', 10, 2)->default(0,00);
            $table->integer('tborderidmethodpay')->unsigned();
            $table->boolean('tborderestadepay')->default(false);
            $table->timestamps();

            $table->foreign('tborderiduser', 'fk_user_id')->references('tbuserid')->on('tbuser')->onDelete('no action')->onUpdate('no action');

            //$table->foreign('tborderidmethodpay', 'fk_methodpay_id2')->references('tbmethodpayid')->on('tbmethodpay')->onDelete('no action')->onUpdate('no action');
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
