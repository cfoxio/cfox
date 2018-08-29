<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('subdomain')->nullable(false)->unique();
            $table->string('homepage')->nullable(true);
            $table->string('country');
            $table->string('logo')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('clan_user', function (Blueprint $table) {
            $table->integer('clan_id');
            $table->integer('user_id');
            $table->primary(['clan_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clans');
        Schema::dropIfExists('clan_user');
    }
}
