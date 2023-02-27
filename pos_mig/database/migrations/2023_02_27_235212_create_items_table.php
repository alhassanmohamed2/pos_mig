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
        Schema::create('items', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->integer('category_id')->nullable()->index('category_id');
            $table->string('img')->nullable();
            $table->integer('price')->nullable();
            $table->text('variation')->nullable();
            $table->string('addons')->nullable();
            $table->text('description')->nullable();
            $table->float('discount', 10, 0)->nullable();
            $table->string('discount_type')->nullable();
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
        Schema::dropIfExists('items');
    }
};
