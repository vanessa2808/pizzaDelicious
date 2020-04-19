<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_details')) {

            Schema::create('product_details', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('quantity');
                $table->unsignedBigInteger('pizza_id');
                $table->foreign('pizza_id')->references('id')->on('pizza')->onDelete('cascade');
                $table->unsignedBigInteger('beefPizza_id');
                $table->foreign('beefPizza_id')->references('id')->on('beefPizza')->onDelete('cascade');
                $table->unsignedBigInteger('vegetablePizza_id');
                $table->foreign('vegetablePizza_id')->references('id')->on('vegetablePizza')->onDelete('cascade');
                $table->unsignedBigInteger('vegetarianPizza_id');
                $table->foreign('vegetarianPizza_id')->references('id')->on('vegetarianPizza')->onDelete('cascade');
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
        Schema::dropIfExists('product_details');
    }
}
