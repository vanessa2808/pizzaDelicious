<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('image')) {

            Schema::create('image', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('image1');
                $table->string('image2');
                $table->string('image3');
                $table->string('image4');
                $table->string('image5');


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
        Schema::dropIfExists('image');
    }
}
