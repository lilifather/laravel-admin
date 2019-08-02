<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseIssusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_issuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('question',255)->comment('问题');
            $table->string('answer',2000)->comment('回答');
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
        Schema::dropIfExists('course_issuses');
    }
}
