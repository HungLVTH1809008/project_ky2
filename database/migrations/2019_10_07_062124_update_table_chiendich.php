<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableChiendich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chiendich', function (Blueprint $table) {
            $table->foreign("sukien_id")->references("sukien_id")->on("sukien");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chiendich', function (Blueprint $table) {
            $table->dropForeign(["sukien_id"]);

        });
    }
}
