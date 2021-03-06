<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('innovation', function (Blueprint $table) {
            $table->increments('batch_id'); 
            $table->integer('form_id');
            $table->string('output');
            $table->string('success_indicator');
            $table->string('actual_accomplishments');
            $table->string('quality');
            $table->integer('efficiency');
            $table->integer('timeliness');
            $table->integer('average');
            $table->string('remarks');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('innovation');
    }
}