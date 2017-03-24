<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_trackings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('delivery_id');
            $table->integer('courier_id');
            $table->integer('refference_id')->nullable();
            $table->integer('tracking_status');
            $table->text('current_position');
            $table->text('additional_note');
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
        Schema::dropIfExists('delivery_trackings');
    }
}
