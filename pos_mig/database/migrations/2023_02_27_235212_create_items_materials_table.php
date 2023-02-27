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
        Schema::create('items_materials', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->nullable();
            $table->integer('material_id')->nullable()->index('material_id');
            $table->integer('item_id')->nullable()->index('item_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_materials');
    }
};
