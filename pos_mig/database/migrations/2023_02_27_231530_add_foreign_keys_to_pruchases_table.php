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
        Schema::table('pruchases', function (Blueprint $table) {
            $table->foreign(['material_id'], 'pruchases_ibfk_1')->references(['id'])->on('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pruchases', function (Blueprint $table) {
            $table->dropForeign('pruchases_ibfk_1');
        });
    }
};
