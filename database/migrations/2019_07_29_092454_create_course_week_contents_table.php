<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseWeekContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_week_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title',30)->comment('课程周内容标题');
            $table->string('intro',600)->comment('周课程描述');
            $table->string('duration',30)->comment('持续时间');
            $table->unsignedInteger('course_week_id')->comment('周课程id');
            $table->index('course_week_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_week_contents');
    }
}
