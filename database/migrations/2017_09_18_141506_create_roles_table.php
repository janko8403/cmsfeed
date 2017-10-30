<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });

        DB::table('roles')->insert(array('id' => 1, 'type' => 'admin'));
        DB::table('roles')->insert(array('id' => 2, 'type' => 'editor'));
        DB::table('roles')->insert(array('id' => 3, 'type' => 'user'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
