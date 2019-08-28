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
       Schema::create('tbuser', function (Blueprint $table) {
            $table->increments('tbuserid');
            $table->integer('tbuseridcountry')->unsigned();
            $table->smallInteger('tbuseridleveluser')->unsigned();
            $table->string('tbusername',20);
            $table->string('tbuserlastname',30);
            $table->string('tbuserusername',10);
            $table->string('tbuseremail',20)->unique();
            $table->string('tbuserpassword',15);
            $table->text('tbuseraddress')->default('Null');
            $table->string('tbusercreditcard',18);
            $table->string('tbuserimage',100);
            $table->boolean('tbuseractive')->default(true);
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
