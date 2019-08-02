<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseWeekContentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_week_content_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedTinyInteger('type')->comment('类型视频还是文字');
            $table->string('title',30)->comment('课程标题');
            $table->string('content',15000)->comment('内容');
            $table->string('duration',10)->comment('持续时间');
            $table->unsignedInteger('course_week_content_id')->comment('课程周内容id');
            $table->index('course_week_content_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_week_content_lists');
    }
}
