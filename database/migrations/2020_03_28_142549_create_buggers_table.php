<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('buggers')) {

            Schema::create('buggers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->text('description');
                $table->decimal('price');
                $table->text('recipe');
                $table->string('chef');
                $table->string('time');
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
        Schema::dropIfExists('buggers');
    }
}
