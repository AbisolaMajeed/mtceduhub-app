<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('pages.courses', compact('courses'));
    }

    public function getACourse($title)
    {
        $courses_exist = Course::where('title', $title)->firstOrFail();

        $courses = Course::where('title', $courses_exist->title)->limit(1)->get();
        $coursestags = Course::where('aliase', $courses[0]->aliase)->limit(3)->inRandomOrder()->get();
        return view('pages.a-course', compact('courses', 'coursestags'));
    }
}
