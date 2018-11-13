<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_code');
            $table->string('news_title');
            $table->string('news_short_content');
            $table->text('news_content');
            $table->string('news_preview');
            $table->integer('news_day');
            $table->integer('news_views');
            $table->integer('category_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('news', function($table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
