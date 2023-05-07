<?php

namespace App\Http\Controllers;

use App\Models\Course;
class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::limit(6)->get();
        return view('index', compact('courses'));
    }
}
