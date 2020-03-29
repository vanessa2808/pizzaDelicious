<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('menuPricing')) {

            Schema::create('menuPricing', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->text('description');
                $table->decimal('price');
                $table->string('image');
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
        Schema::dropIfExists('menuPricing');
    }
}
