<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('lid');
            $table->string('lname')->comment('友链名');
            $table->string('link')->comment('地址');
            $table->string('logo')->comment('图片');
            $table->tinyInteger('sort')->default(0)->comment('排序');
            $table->tinyInteger('status')->comment('1-显示，2-隐藏')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
