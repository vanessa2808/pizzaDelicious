<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contactInfo')) {

            Schema::create('contactInfo', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('email');

                $table->text('subject');
                $table->text('message');

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
        Schema::dropIfExists('contactInfo');
    }
}
