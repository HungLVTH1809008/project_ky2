<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUngho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ungho', function (Blueprint $table) {
            $table->foreign("chiendich_id")->references("chiendich_id")->on("chiendich");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ungho', function (Blueprint $table) {
            $table->dropForeign(["chiendich_id"]);
        });
    }
}
