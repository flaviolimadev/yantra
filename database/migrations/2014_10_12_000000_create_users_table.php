<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('user')->unique();
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('password');
            $table->string('tax_code')->nullable()->unique();
            $table->string('birth_date')->nullable();
            $table->integer('balance')->default(0);
            $table->integer('status')->default(0);
            $table->integer('access_lavel')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
