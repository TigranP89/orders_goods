<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('goods_id')->unsigned();
            $table->unsignedBigInteger('orders_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('goods_id')->references('id')->on('shop_goods');
            $table->foreign('orders_id')->references('id')->on('shop_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_order_lists');
    }
};
