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
        Schema::create('pruchases', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->nullable();
            $table->string('name')->nullable();
            $table->float('price', 10, 0)->nullable();
            $table->integer('qty')->nullable();
            $table->integer('material_id')->nullable()->index('material_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruchases');
    }
};
