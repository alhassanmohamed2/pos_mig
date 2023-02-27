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
        Schema::table('items_materials', function (Blueprint $table) {
            $table->foreign(['item_id'], 'items_materials_ibfk_2')->references(['id'])->on('items');
            $table->foreign(['material_id'], 'items_materials_ibfk_1')->references(['id'])->on('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items_materials', function (Blueprint $table) {
            $table->dropForeign('items_materials_ibfk_2');
            $table->dropForeign('items_materials_ibfk_1');
        });
    }
};
