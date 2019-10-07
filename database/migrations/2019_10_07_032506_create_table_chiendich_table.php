<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChiendichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiendich', function (Blueprint $table) {
            $table->bigIncrements('chiendich_id');
            $table->string('chiendich_name');
            $table->unsignedBigInteger('sukien_id');
            $table->longText('noidung');
            $table->string('hinh');
            $table->string('ds_ungho');
            $table->date('ngayhethan');
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
        Schema::dropIfExists('chiendich');
    }
}
