<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('recipient');
                $table->text('address');
                $table->string('phone', 25);
                $table->integer('payment_type');
                $table->decimal('total');
                $table->unsignedBigInteger('user_id');

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->unsignedBigInteger('status_id');
                $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
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

        Schema::dropIfExists('orders');




    }
}
