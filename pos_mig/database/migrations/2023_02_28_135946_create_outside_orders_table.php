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
        Schema::create('outside_orders', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('order_id')->nullable()->index('order_id');
            $table->integer('delivery_man_id')->nullable()->index('delivery_man_id');
            $table->integer('zone_id')->nullable()->index('zone_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outside_orders');
    }
};
