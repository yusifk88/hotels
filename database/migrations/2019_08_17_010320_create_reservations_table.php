<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('guest_id')->unsigned();
            $table->date('start_date');
            $table->date('end-date');
            $table->double('amount');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->text('info')->nullable();
            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('guest_id')->references('id')->on('guests');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
