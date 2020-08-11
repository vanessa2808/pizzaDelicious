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
                $table->unsignedBigInteger('bakeryType_id');
                $table->foreign('bakeryType_id')->references('id')->on('bakeryTypes')->onDelete('cascade');
                $table->string('name');
                $table->text('description');
                $table->decimal('price');

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
    }
}
