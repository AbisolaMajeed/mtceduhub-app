<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<1; $i++) {
            Course::updateOrCreate(['title' => 'Project Management Professional'],
            [
                'aliase'    => 'PMP',
                'category'  => 'PMP',
                'student_enrolled'  => 12454,
                'course_description_title' => 'Hi! Welcome to AWS Cloud Practitioner,',
                'course_content'    => 'This course covers the foundational principles of the AWS Cloud, as well as best practices for designing and deploying applications on the AWS platform, and prepares you for the AWS Cloud Practitioner exam',
                'learning_objectives_1'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_objectives_2'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_objectives_3'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_objectives_4'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_objectives_5'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_objectives_6'   => 'Understand the basic concepts and benefits of the AWS Cloud',
                'learning_outcomes_1'   => 'Pass the AWS Cloud Practitioner exam on your first attempt',
                'learning_outcomes_2'   => 'Pass the AWS Cloud Practitioner exam on your first attempt',
                'learning_outcomes_3'   => 'Pass the AWS Cloud Practitioner exam on your first attempt',
                'learning_outcomes_4'   => 'Pass the AWS Cloud Practitioner exam on your first attempt',
                'cover' => 'https://mtceduhub.herokuapp.com/assets/img/courses/AWS-Developer-Associate.png',
                'rating'    => 5
            ]);
        }
    }
}
