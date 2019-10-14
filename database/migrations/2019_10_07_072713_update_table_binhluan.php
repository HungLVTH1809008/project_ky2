<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableBinhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binhluan', function (Blueprint $table) {
            $table->foreign("user1_id")->references("user1_id")->on("user1");
            $table->foreign("tintuc_id")->references("tintuc_id")->on("tintuc");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('binhluan', function (Blueprint $table) {
            $table->dropForeign(["user1_id"]);
            $table->dropForeign(["tintuc_id"]);
        });
    }
}
