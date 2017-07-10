<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('openid');
            $table->string('username');
            $table->string('name');
            $table->string('gender');
            $table->string('birthday');
            $table->string('cellphone');
            $table->string('selfie');
            $table->string('brief');
            $table->string('competition');
            $table->string('phase');
            $table->string('standing');
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
        Schema::drop('candidates');
    }
}
