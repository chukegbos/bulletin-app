<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('author')->unique();
            $table->string('title')->unique();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->string('post_count')->nullable();
            $table->string('comment status')->nullable();
            $table->string('category')->nullable();
            $table->string('tag')->nullable();
            $table->string('featured_image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
