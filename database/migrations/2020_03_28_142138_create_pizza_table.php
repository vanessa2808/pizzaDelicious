<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pizza')) {

            Schema::create('pizza', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->text('description');
                $table->decimal('price');
                $table->unsignedBigInteger('ingredientTypes_id');
                $table->foreign('ingredientTypes_id')->references('id')->on('ingredientTypes')->onDelete('cascade');
                $table->unsignedBigInteger('ingredient_id');
                $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
                $table->string('chef');
                $table->string('time');
                $table->string('image');
                $table->integer('status');

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
        Schema::dropIfExists('pizza');
    }
}
