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
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string('email')->unique();
            $table->timestamps();
        });
        Schema::create('users_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('company_id');
            $table->timestamps();
        });
        Schema::create('encuestas_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('encuestas_id');
            $table->integer('company_id');
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
            $table->string('type',1);
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
            $table->integer('encuestedinfo_id');
            $table->string('coment');
            $table->string('status',1);
            $table->timestamps();
        });
        Schema::create('encuestedinfo', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('direction')->nullable();
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
        Schema::drop('preguntas');
        Schema::drop('real_encuesta');
        Schema::drop('encuestedinfo');
        Schema::drop('company');
        Schema::drop('users_company');
        Schema::drop('encuestas_company');
    }
}
