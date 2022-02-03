<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingparcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingparcels', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('phone');
                $table->string('weight');
                $table->string('type');
                $table->string('image');
                $table->string('date');
                $table->string('receiver');
                $table->string('rec_address');
                $table->string('contact');
                $table->string('delivery_area');
                $table->string('total_cost');
                $table->string('status')->default('delivered','pending','return');
                $table->string('track_number')->nullable();
                $table->integer('user_id');
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
        Schema::dropIfExists('bookingparcels');
    }
}
