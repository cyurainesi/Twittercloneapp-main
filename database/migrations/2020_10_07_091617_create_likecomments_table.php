<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikecommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likecomments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()->ondelete('cascade');
            $table->unsignedBigInteger('comment_id')->constrained()->ondelete('cascade');
            $table->boolean('liked');
            $table->timestamps();
            $table->unique(['user_id','comment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likecomments');
    }
}
