<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

         DB::table('categories')->insert(array('id' => '1', 'name' => 'Bez kategorii', 'slug' => 'bez-kategorii'));
         DB::table('categories')->insert(array('id' => '2', 'name' => 'Sekcja 1', 'slug' => 'sekcja-1'));
         DB::table('categories')->insert(array('id' => '3', 'name' => 'Sekcja 2', 'slug' => 'sekcja-2'));
         DB::table('categories')->insert(array('id' => '4', 'name' => 'Sekcja 3', 'slug' => 'sekcja-3'));
         DB::table('categories')->insert(array('id' => '5', 'name' => 'Sekcja 4', 'slug' => 'sekcja-4'));
         DB::table('categories')->insert(array('id' => '6', 'name' => 'Sekcja 5', 'slug' => 'sekcja-5'));
         DB::table('categories')->insert(array('id' => '7', 'name' => 'Sekcja 6', 'slug' => 'sekcja-6'));
         DB::table('categories')->insert(array('id' => '8', 'name' => 'Sekcja 7', 'slug' => 'sekcja-7'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
