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
        Schema::table('outside_orders', function (Blueprint $table) {
            $table->foreign(['order_id'], 'outside_orders_ibfk_2')->references(['id'])->on('orders');
            $table->foreign(['zone_id'], 'outside_orders_ibfk_1')->references(['id'])->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outside_orders', function (Blueprint $table) {
            $table->dropForeign('outside_orders_ibfk_2');
            $table->dropForeign('outside_orders_ibfk_1');
        });
    }
};
