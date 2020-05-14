<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pizzaIngredients')) {

            Schema::create('pizzaIngredients', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('pizza_id');
                $table->foreign('pizza_id')->references('id')->on('pizza')->onDelete('cascade');
                $table->unsignedBigInteger('ingredient_id');
                $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
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
        Schema::dropIfExists('pizzaIngredients');
    }
}
