<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');// paket/item
            $table->string('photo')->nullable();
            $table->text('description');
            $table->string('convertion')->nullable();
            $table->integer('daily_price')->nullable();
            $table->integer('condiment_price')->nullable();
            $table->integer('catering_price_50')->nullable();
            $table->integer('catering_price_75')->nullable();
            $table->integer('catering_price_100')->nullable();
            $table->boolean('is_stall')->nullable();
            $table->boolean('is_condiment')->nullable();
            $table->boolean('is_drink')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('items');
    }
}
