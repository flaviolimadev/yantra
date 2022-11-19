<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateChestsSysAddComicoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('chests_sys', function (Blueprint $table) {
            $table->integer('direct')->default(0)->after('return');
            $table->integer('network')->default(0)->after('return');
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
        Schema::table('chests_sys', function (Blueprint $table) {
            $table->dropColumn('direct');
            $table->dropColumn('network');
        });
    }
}
