<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chests', function (Blueprint $table) {
            
            $table->id();
            $table->integer('user_id');
            $table->integer('chest')->default(0);
            $table->integer('num_01')->default(0);
            $table->integer('num_02')->default(0);
            $table->integer('num_03')->default(0);
            $table->integer('num_04')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('chests');
    }
}
