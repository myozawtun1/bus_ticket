<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('time');
            $table->string('seatno');
            $table->date('date');
            $table->string('status');
            $table->integer('totalprice');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('customer_id');

            $table->timestamps();
            $table->foreign('route_id')
                  ->references('id')->on('routes')
                  ->onDelete('cascade');
            $table->foreign('customer_id')
                  ->references('id')->on('customers')
                  ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
