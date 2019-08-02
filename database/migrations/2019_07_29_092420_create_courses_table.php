<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('course_name',30)->comment('课程名称');
            $table->unsignedInteger('cat_id')->comment('分类id');
            $table->unsignedInteger('teacher_id')->comment('老师id');
            $table->unsignedInteger('school_id')->comment('学校id');
            $table->string('coure_intro',2000)->comment('课程介绍');
            $table->string('fit_for',200)->comment('适用人群');
            $table->string('defficulty',5)->comment('难度');
            $table->string('duration',30)->comment('持续时间');
            $table->unsignedDecimal('price',10,2)->comment('课程价格');
            $table->string('image',255)->comment('课程图片');
            $table->string('sm_image',255)->comment('课程小图片');

            $table->index('cat_id');
            $table->index('teacher_id');
            $table->index('school_id');
            $table->index('price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
