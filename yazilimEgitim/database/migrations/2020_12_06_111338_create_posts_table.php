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
        Schema::create('posts', function (Blueprint $table)
        {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->string('image')->nullable();
            $table->string('slug');
            $table->json('tags_id')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->dateTime('publish_date')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('post_category')
                ->onDelete('cascade');


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
