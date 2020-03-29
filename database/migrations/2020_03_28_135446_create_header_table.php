<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('header')) {

            Schema::create('header', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('image1');
                $table->string('title1_1');
                $table->string('title1_2');
                $table->string('title1_3');
                $table->string('image2');
                $table->string('title2_1');
                $table->string('title2_2');
                $table->string('title2_3');
                $table->string('image3');
                $table->string('title3_1');
                $table->string('title3_2');
                $table->string('title3_3');
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
        Schema::dropIfExists('header');
    }
}
