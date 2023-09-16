<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PostID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('PostID')->on('blogs')->references('id')->cascadeOnDelete();
            $table->foreign('UserID')->on('users')->references('id')->cascadeOnDelete();
            $table->text('Comment');
            $table->bigInteger('isUseFull')->default(0);
            $table->bigInteger('notUseFull')->default(0);
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
        Schema::dropIfExists('blog_comments');
    }
}
