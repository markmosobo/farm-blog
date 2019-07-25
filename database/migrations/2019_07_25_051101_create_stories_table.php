<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('story_category')->nullable();
            $table->string('story_background_image')->nullable();
            $table->string('story_title')->nullable();
            $table->integer('story_author_id')->unsigned();
            $table->foreign('story_author_id')->references('id')
                    ->on('authors')->onUpdate('cascade')->onDelete('no action');
            $table->dateTime('story_date')->nullable();
            $table->string('story_image')->nullable();
            $table->string('story_quote')->nullable();
            $table->longText('story_content')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('stories');
    }
}
