<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_articles', function (Blueprint $table)
        {

            $table->id()->autoIncrement();
            $table->text('articles_name')->nullable();
            $table->text('articles_image_1')->nullable();
            $table->text('articles_image_2')->nullable();
            $table->text('articles_image_3')->nullable();
            $table->text('articles_text_1')->nullable();
            $table->text('articles_text_2')->nullable();
            $table->text('articles_text_3')->nullable();
            $table->text('articles_text_5')->nullable();
            $table->text('articles_text_6')->nullable();
            $table->text('articles_text_7')->nullable();
            $table->text('articles_text_8')->nullable();
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
        Schema::dropIfExists('list_articles');
    }
}
