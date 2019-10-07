<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTaochiendichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taochiendich', function (Blueprint $table) {
            $table->bigIncrements('chiendich_id');
            $table->string('chiendich_name');
            $table->text('mota');
            $table->float('sotien');
            $table->date('ngayhethan');
            $table->string('hinh');
            $table->string('tentochuc');
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
        Schema::dropIfExists('taochiendich');
    }
}
