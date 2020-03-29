<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('address')) {

            Schema::create('address', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('phone', 25);
                $table->text('address');
                $table->string('status');
                $table->string('email');
                $table->string('detail1');
                $table->string('detail2');
                $table->string('time');
                $table->string('website');


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
        Schema::dropIfExists('address');
    }
}
