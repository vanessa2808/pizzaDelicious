<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('comment')) {

            Schema::create('comment', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('description');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->unsignedBigInteger('pizza_id');
                $table->foreign('pizza_id')->references('id')->on('pizza')->onDelete('cascade');

                $table->boolean('approved')->default(0);

                $table->timestamps();
            });
        }

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
