<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()->ondelete('cascade');
            $table->unsignedBigInteger('tweet_id')->constrained()->ondelete('cascade');
            $table->unsignedBigInteger('comment_id')->constrained()->ondelete('cascade');
            $table->mediumText('reply')->nullable();
            $table->mediumText('image')->nullable();
            $table->mediumText('gif')->nullable();
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
        Schema::dropIfExists('replies');
    }
}
