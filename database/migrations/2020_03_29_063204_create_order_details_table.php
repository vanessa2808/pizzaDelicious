<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('order_details')) {

            Schema::create('order_details', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->decimal('price');
                $table->integer('quantity');
                $table->unsignedBigInteger('pizza_id');
                $table->foreign('pizza_id')->references('id')->on('pizza')->onDelete('cascade');
                $table->unsignedBigInteger('order_id');
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('order_details');
    }
}
