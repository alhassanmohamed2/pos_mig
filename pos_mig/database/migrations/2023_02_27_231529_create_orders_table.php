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
        Schema::create('orders', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('customer_id')->nullable()->index('customer_id');
            $table->text('order_details')->nullable();
            $table->string('order_type')->nullable();
            $table->float('total_amount', 10, 0)->nullable();
            $table->float('amount_received', 10, 0)->nullable();
            $table->float('discount', 10, 0)->nullable();
            $table->float('tax', 10, 0)->nullable();
            $table->string('payment_methd')->nullable();
            $table->integer('shift_id')->nullable();
            $table->float('service_fee', 10, 0)->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
