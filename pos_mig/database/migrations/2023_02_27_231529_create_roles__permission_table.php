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
        Schema::create('roles_ permission', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->nullable();
            $table->integer('role_id')->nullable()->index('role_id');
            $table->integer('permission_id')->nullable()->index('permission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_ permission');
    }
};
