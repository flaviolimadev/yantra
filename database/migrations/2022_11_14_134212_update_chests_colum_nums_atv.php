<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateChestsColumNumsAtv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('chests', function (Blueprint $table) {
            $table->integer('atv_num_01')->default(0);
            $table->integer('atv_num_02')->default(0);
            $table->integer('atv_num_03')->default(0);
            $table->integer('atv_num_04')->default(0);
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
        Schema::table('chests', function (Blueprint $table) {
            $table->dropColumn('atv_num_01');
            $table->dropColumn('atv_num_02');
            $table->dropColumn('atv_num_03');
            $table->dropColumn('atv_num_04');
        });
    }
}
