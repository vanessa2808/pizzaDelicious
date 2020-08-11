<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomPizzaIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('customPizzaIngredients')) {

            Schema::create('customPizzaIngredients', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('customPizza_id');
                $table->foreign('customPizza_id')->references('id')->on('customPizza')->onDelete('cascade');
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
        Schema::dropIfExists('customPizzaIngredients');
    }
}
