<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('path')->unique();
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('images_id');
            $table->unsignedBigInteger('views_id');
            $table->foreign('section_id')->references('id')->on('sections')->nullable();
            $table->foreign('images_id')->references('id')->on('images')->nullable();
            $table->foreign('views_id')->references('id')->on('views')->nullable();
            $table->json('comments_id')->nullable();
            $table->json('data_post');
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
        Schema::dropIfExists('posts');
    }
}
