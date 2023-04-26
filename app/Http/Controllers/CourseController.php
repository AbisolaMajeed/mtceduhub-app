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

    public function viewAwsSolutions()
    {
        return view('pages.courses.aws-solutions');
    }

    public function viewAwsSysops()
    {
        return view('pages.courses.aws-sysops');
    }

    public function viewAwsDevelop()
    {
        return view('pages.courses.aws-develop');
    }

    public function viewAwsSolution()
    {
        return view('pages.courses.aws-solution');
    }

    public function viewAwsDevops()
    {
        return view('pages.courses.aws-devops');
    } 
}
