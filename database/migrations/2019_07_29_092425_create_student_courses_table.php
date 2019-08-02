<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('student_id')->comment('学生id');
            $table->unsignedInteger('course_id')->comment('课程id');
            $table->unsignedInteger('last_video_id')->comment('最后看的视频id');
            $table->unsignedTinyInteger('finish_week')->comment('完成的周');
            $table->unsignedTinyInteger('total_week')->comment('总的周');
            $table->index('student_id');
            $table->index('course_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
