<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ingredients')) {

            Schema::create('ingredients', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('ingredientType_id');
                $table->foreign('ingredientType_id')->references('id')->on('ingredientTypes')->onDelete('cascade');
                $table->string('ingredientName');

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
        Schema::dropIfExists('ingredients');
    }
}
