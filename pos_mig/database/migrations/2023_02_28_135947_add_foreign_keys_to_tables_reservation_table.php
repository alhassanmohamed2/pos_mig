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
        Schema::table('tables_reservation', function (Blueprint $table) {
            $table->foreign(['table_id'], 'tables_reservation_ibfk_1')->references(['id'])->on('tables');
            $table->foreign(['customer_id'], 'tables_reservation_ibfk_2')->references(['id'])->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables_reservation', function (Blueprint $table) {
            $table->dropForeign('tables_reservation_ibfk_1');
            $table->dropForeign('tables_reservation_ibfk_2');
        });
    }
};
