<?php

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
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('encuestas',function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status',1);
            $table->timestamps();
        });
        Schema::create('preguntas',function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status',1);
            $table->integer('encuestas_id');
            $table->timestamps();
        });
        Schema::create('opciones',function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status',1);
            $table->integer('preguntas_id');
            $table->timestamps();
        });
        Schema::create('real_encuesta', function (Blueprint $table){
            $table->increments('id');
            $table->integer('encuestas_id');
            $table->integer('preguntas_id');
            $table->integer('opciones_id');
            $table->string('coment');
            $table->string('status',1);
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
        Schema::drop('users');
        Schema::drop('encuestas');
        Schema::drop('opciones');
        Schema::drop('real_encuesta');
    }
}
