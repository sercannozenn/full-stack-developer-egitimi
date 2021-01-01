<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('website');
            $table->text('message');
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('post_id')->unsigned();
            $table->integer('parent')->default(0);
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
