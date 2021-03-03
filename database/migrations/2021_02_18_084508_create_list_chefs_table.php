<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_chefs', function (Blueprint $table)
        {
            $table->id('id')->autoIncrement();
            $table->integer('image_chef')->nullable();
            $table->integer('name_chef')->nullable();
            $table->text('chef_description_1')->nullable();
            $table->text('chef_description_2')->nullable();
            $table->text('chef_description_3')->nullable();
            $table->text('chef_description_4')->nullable();
            $table->text('chef_description_5')->nullable();

            $table->integer('name_recipe')->nullable();
            $table->integer('image_recipe')->nullable();


            $table->text('chef_ingredients_1')->nullable();
            $table->integer('chef_ingredients_gr_1')->nullable();
            $table->text('chef_ingredients_value_1')->nullable();


            $table->text('chef_ingredients_2')->nullable();
            $table->integer('chef_ingredients_gr_2')->nullable();
            $table->text('chef_ingredients_value_2')->nullable();

            $table->text('chef_ingredients_3')->nullable();
            $table->integer('chef_ingredients_gr_3')->nullable();
            $table->text('chef_ingredients_value_3')->nullable();


            $table->text('chef_ingredients_4')->nullable();
            $table->integer('chef_ingredients_gr_4')->nullable();
            $table->text('chef_ingredients_value_4')->nullable();


            $table->text('chef_ingredients_5')->nullable();
            $table->integer('chef_ingredients_gr_5')->nullable();
            $table->text('chef_ingredients_value_5')->nullable();


            $table->text('chef_ingredients_6')->nullable();
            $table->integer('chef_ingredients_gr_6')->nullable();
            $table->text('chef_ingredients_value_6')->nullable();


            $table->text('chef_ingredients_7')->nullable();
            $table->integer('chef_ingredients_gr_7')->nullable();
            $table->text('chef_ingredients_value_7')->nullable();


            $table->text('chef_ingredients_8')->nullable();
            $table->integer('chef_ingredients_gr_8')->nullable();
            $table->text('chef_ingredients_value_8')->nullable();


            $table->text('chef_ingredients_9')->nullable();
            $table->integer('chef_ingredients_gr_9')->nullable();
            $table->text('chef_ingredients_value_9')->nullable();


            $table->text('chef_ingredients_10')->nullable();
            $table->integer('chef_ingredients_gr_10')->nullable();
            $table->text('chef_ingredients_value_10')->nullable();


            $table->text('chef_ingredients_taste_salt')->nullable();
            $table->text('chef_ingredients_taste_pepper')->nullable();

            $table->text('chef_recipe_description_1')->nullable();
            $table->text('chef_recipe_description_2')->nullable();
            $table->text('chef_recipe_description_3')->nullable();
            $table->text('chef_recipe_description_4')->nullable();
            $table->text('chef_recipe_description_5')->nullable();
            $table->text('chef_recipe_additionally')->nullable();

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
        Schema::dropIfExists('list_chefs');
    }
}
