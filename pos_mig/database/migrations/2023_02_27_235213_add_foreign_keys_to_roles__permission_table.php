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
        Schema::table('roles_ permission', function (Blueprint $table) {
            $table->foreign(['role_id'], 'roles_ permission_ibfk_2')->references(['id'])->on('roles');
            $table->foreign(['permission_id'], 'roles_ permission_ibfk_1')->references(['id'])->on('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles_ permission', function (Blueprint $table) {
            $table->dropForeign('roles_ permission_ibfk_2');
            $table->dropForeign('roles_ permission_ibfk_1');
        });
    }
};
