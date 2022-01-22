<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            // $table->string('phone');
            $table->string('receiver');
            $table->string('rec_address');
            $table->string('contact');
            $table->string('delivery_area');
            $table->string('weight');
            $table->string('total_cost');
            $table->string('type');
            $table->string('image');
            $table->string('date');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('parcels');
    }
}
