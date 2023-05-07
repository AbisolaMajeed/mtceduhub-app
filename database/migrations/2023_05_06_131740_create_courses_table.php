<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('title');
            $table->string('aliase');
            $table->string('category');
            $table->string('student_enrolled');
            $table->longText('course_description_title');
            $table->longText('course_content');

            $table->longText('learning_objectives_1');
            $table->longText('learning_objectives_2');
            $table->longText('learning_objectives_3');
            $table->longText('learning_objectives_4');
            $table->longText('learning_objectives_5');
            $table->longText('learning_objectives_6');

            $table->longText('learning_outcomes_1');
            $table->longText('learning_outcomes_2');
            $table->longText('learning_outcomes_3');
            $table->longText('learning_outcomes_4');

            $table->string('cover');
            $table->string('rating');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
