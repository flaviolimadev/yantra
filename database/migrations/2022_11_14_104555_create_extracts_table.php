<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('status')->default(0);
            $table->string('about');
            $table->integer('value');
            $table->integer('ref');
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
        Schema::dropIfExists('extracts');
    }
}
