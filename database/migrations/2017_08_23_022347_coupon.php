<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 200);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('order_min');
            $table->integer('order_max');
            $table->integer('redeem_max');
            $table->integer('user_max');
            $table->integer('value');
            $table->integer('presentage');
            $table->boolean('is_free_shipping');
            $table->boolean('is_active');
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
        Schema::dropIfExists('coupons');
    }
}
