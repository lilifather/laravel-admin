<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',30)->comment('老师姓名');
            $table->unsignedTinyInteger('gender')->default('1')->comment('性别'.'1是男, 0 是女');
            $table->date('birthday')->comment('老师生日');
            $table->unsignedInteger('school_id')->comment('老师所在学校的id');
            $table->string('profession_id',255)->comment('老师专业id');
            $table->char('mobile',11)->comment('老师联系电话');
            $table->string('avatar',255)->comment('老师头像');

            $table->index('school_id');
            $table->index('profession_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
