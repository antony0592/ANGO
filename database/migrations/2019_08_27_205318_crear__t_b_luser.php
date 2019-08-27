<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTBLuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbluser', function (Blueprint $table) {
            $table->increments('tbuserid');
            $table->string('tbuseridcountry');
            $table->integer('tbuseridleveluser',1);
            $table->string('tbusername',20);
            $table->string('tbuserlastname',30);
            $table->string('tbuserusername',10);
            $table->string('tbuseremail',20)->unique();
            $table->string('tbuserpassword',15);
            $table->text('tbuseraddress');
            $table->string('tbusercreditcard',18);
            $table->string('tbuserimage',45);
            $table->boolean('tbuseractive',true);
            $table->rememberToken();
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
        Schema::dropIfExists('tbuser');
    }
}
