<?php

namespace App\Http\Controllers;


class CourseController extends Controller
{
    public function index()
    {
        return view('pages.courses');
    }

    public function viewAwsCloud()
    {
        return view('pages.courses.aws-cloud');
    }
}
