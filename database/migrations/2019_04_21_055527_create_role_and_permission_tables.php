<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAndPermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('role')) {
            Schema::create('role', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 500);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('permission')) {
            Schema::create('permission', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 500);
                $table->string('name', 500);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('role_permission')) {
            Schema::create('role_permission', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('role_id');
                $table->foreign('role_id')->references('id')->on('role')->onDelete('CASCADE');
                $table->unsignedInteger('permission_id');
                $table->foreign('permission_id')->references('id')->on('permission')->onDelete('CASCADE');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
        Schema::dropIfExists('permission');
        Schema::dropIfExists('role_permission');
    }
}
