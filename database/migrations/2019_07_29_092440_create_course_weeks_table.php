<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title',60)->comment('课程周标题');
            $table->unsignedTinyInteger('hours')->comment('课程小时');
            $table->unsignedInteger('course_id')->comment('课程id');
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
        Schema::dropIfExists('course_weeks');
    }
}
