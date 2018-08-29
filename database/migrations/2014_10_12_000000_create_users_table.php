<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
            $table->string('slug');
            $table->string('email')->unique();
            $table->date('birthday')->default(now());
            $table->string('gender')->default('undefined');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('language')->default('en');
            $table->string('nationality')->default('DE');
            $table->string('image')->nullable();
            $table->string('steam')->nullable();
            $table->string('xboxlive')->nullable();
            $table->string('psn')->nullable();
            $table->string('origin')->nullable();
            $table->string('uplay')->nullable();
            $table->string('battlenet')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
