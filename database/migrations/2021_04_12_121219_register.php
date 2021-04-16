<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Register extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('register',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->integer('phone');
            $table->bigInteger('national_id');
            $table->string('password');
            $table->text('about_us');
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
        //
    }
}
