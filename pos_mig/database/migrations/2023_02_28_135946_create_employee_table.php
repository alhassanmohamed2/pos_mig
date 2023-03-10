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
        Schema::create('employee', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('role_id')->nullable()->index('role_id');
            $table->string('img')->nullable();
            $table->string('address')->nullable();
            $table->string('nationalId')->nullable();
            $table->string('nationalId_img')->nullable();
            $table->string('salary_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
