<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListSnacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_snacks', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('image')->nullable();
            $table->text('ingredients_1')->nullable();
            $table->text('ingredients_2')->nullable();
            $table->text('ingredients_3')->nullable();
            $table->text('ingredients_4')->nullable();
            $table->text('ingredients_5')->nullable();
            $table->text('ingredients_6')->nullable();
            $table->text('ingredients_7')->nullable();
            $table->text('ingredients_8')->nullable();
            $table->text('ingredients_9')->nullable();
            $table->text('ingredients_10')->nullable();
            $table->integer('ingredients_gr_1')->nullable();
            $table->integer('ingredients_gr_2')->nullable();
            $table->integer('ingredients_gr_3')->nullable();
            $table->integer('ingredients_gr_4')->nullable();
            $table->integer('ingredients_gr_5')->nullable();
            $table->integer('ingredients_gr_6')->nullable();
            $table->integer('ingredients_gr_7')->nullable();
            $table->integer('ingredients_gr_8')->nullable();
            $table->integer('ingredients_gr_9')->nullable();
            $table->integer('ingredients_gr_10')->nullable();
            $table->text('ingredients_taste')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->text('description_4')->nullable();
            $table->text('description_5')->nullable();
            $table->text('additionally')->nullable();
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
        Schema::dropIfExists('list_snacks');
    }
}
