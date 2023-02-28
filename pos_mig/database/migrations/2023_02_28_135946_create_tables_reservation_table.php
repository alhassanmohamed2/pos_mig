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
        Schema::create('tables_reservation', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('table_id')->nullable()->index('table_id');
            $table->integer('customer_id')->nullable()->index('customer_id');
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables_reservation');
    }
};
