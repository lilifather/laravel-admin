<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('student_id')->comment('评论学生id');
            $table->string('content',600)->comment('评论内容');
            $table->unsignedTinyInteger('star')->comment('评分星级');
            $table->unsignedInteger('course_id')->comment('课程id');
            $table->index('student_id');
            $table->index('course_id');
            $table->index('star');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_comments');
    }
}
