<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->comment("Tên danh mục");
            $table->bigInteger('parent_id')->comment("Mã id cha")->default(0);
            $table->string('description',255)->comment("Mô tả danh mục");
            $table->string('lang',10)->comment("Ngôn ngữ")->default('vi');
            $table->integer("status")->comment("Trạng thái")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
