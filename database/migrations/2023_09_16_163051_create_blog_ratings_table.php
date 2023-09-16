<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PostID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('PostID')->on('blogs')->references('id')->cascadeOnDelete();
            $table->foreign('UserID')->on('users')->references('id')->cascadeOnDelete();
            $table->integer('Rating');
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
        Schema::dropIfExists('blog_ratings');
    }
}
