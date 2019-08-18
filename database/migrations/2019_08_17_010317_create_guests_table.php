<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('sex');
            $table->string('email',180)->unique();
            $table->string('phone',20)->unique();
            $table->text('info')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
