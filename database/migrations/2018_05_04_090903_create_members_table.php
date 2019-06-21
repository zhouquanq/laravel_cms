<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('sname',50)->comment('用户名');
            $table->string('nickname',50)->unique()->comment('昵称')->default('');
            $table->string('password',64)->comment('密码');
            $table->string('phone',11)->unique()->comment('手机')->default('');
            $table->string('email',64)->unique()->comment('邮箱')->default('');
            $table->string('img',255)->comment('头像')->default('');
            $table->tinyInteger('sex')->comment('1-未设置，1-男，2-女')->default(0);
            $table->tinyInteger('status')->comment('1-正常，2-锁定')->default(1);
            $table->string('session_validate',32)->comment('登录状态')->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
