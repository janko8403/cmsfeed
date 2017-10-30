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
            $table->string('facebook_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->tinyInteger('role_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array('id' => '1', 'facebook_id' => '', 'name' => 'Janusz Jurczyk', 'email' => 'test@test.pl', 'password' => bcrypt('111111'), 'role_id' => '1'));
        DB::table('users')->insert(array('id' => '2', 'facebook_id' => '', 'name' => 'Paweł Poleński', 'email' => 'spacedigital.poland@gmail.com', 'password' => bcrypt('Lukaku2010!@#'), 'role_id' => '1'));
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
