<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCreamSoupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_cream_soups', function (Blueprint $table)
        {
            $table->id()->autoIncrement();
            $table->text('cream_soups_name')->nullable();
            $table->text('cream_soups_image')->nullable();

            $table->text('cream_soups_ingredients_1')->nullable();
            $table->integer('cream_soups_ingredients_gr_1')->nullable();
            $table->text('cream_soups_ingredients_value_1')->nullable();


            $table->text('cream_soups_ingredients_2')->nullable();
            $table->integer('cream_soups_ingredients_gr_2')->nullable();
            $table->text('cream_soups_ingredients_value_2')->nullable();

            $table->text('cream_soups_ingredients_3')->nullable();
            $table->integer('cream_soups_ingredients_gr_3')->nullable();
            $table->text('cream_soups_ingredients_value_3')->nullable();


            $table->text('cream_soups_ingredients_4')->nullable();
            $table->integer('cream_soups_ingredients_gr_4')->nullable();
            $table->text('cream_soups_ingredients_value_4')->nullable();


            $table->text('cream_soups_ingredients_5')->nullable();
            $table->integer('cream_soups_ingredients_gr_5')->nullable();
            $table->text('cream_soups_ingredients_value_5')->nullable();


            $table->text('cream_soups_ingredients_6')->nullable();
            $table->integer('cream_soups_ingredients_gr_6')->nullable();
            $table->text('cream_soups_ingredients_value_6')->nullable();


            $table->text('cream_soups_ingredients_7')->nullable();
            $table->integer('cream_soups_ingredients_gr_7')->nullable();
            $table->text('cream_soups_ingredients_value_7')->nullable();


            $table->text('cream_soups_ingredients_8')->nullable();
            $table->integer('cream_soups_ingredients_gr_8')->nullable();
            $table->text('cream_soups_ingredients_value_8')->nullable();


            $table->text('cream_soups_ingredients_9')->nullable();
            $table->integer('cream_soups_ingredients_gr_9')->nullable();
            $table->text('cream_soups_ingredients_value_9')->nullable();


            $table->text('cream_soupsingredients_10')->nullable();
            $table->integer('cream_soups_ingredients_gr_10')->nullable();
            $table->text('cream_soups_ingredients_value_10')->nullable();


            $table->text('cream_soups_ingredients_taste_salt')->nullable();
            $table->text('cream_soups_ingredients_taste_pepper')->nullable();


            $table->text('cream_soups_description_1')->nullable();
            $table->text('cream_soups_description_2')->nullable();
            $table->text('cream_soups_description_3')->nullable();
            $table->text('cream_soups_description_4')->nullable();
            $table->text('cream_soups_description_5')->nullable();
            $table->text('cream_soups_additionally')->nullable();
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
        Schema::dropIfExists('list_cream_soups');
    }
}
