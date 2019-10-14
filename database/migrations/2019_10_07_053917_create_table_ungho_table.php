<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUnghoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ungho', function (Blueprint $table) {
            $table->bigIncrements('ungho_id');
            $table->string('ungho_name');
            $table->unsignedBigInteger('chiendich_id');
            $table->float('sotien');
            $table->longText('loinhan');
            $table->string('hoten');
            $table->integer('dienthoai');
            $table->string('email');
            $table->unsignedTinyInteger("active")->default(1);
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
        Schema::dropIfExists('ungho');
    }
}
