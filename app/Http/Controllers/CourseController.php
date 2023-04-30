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

    public function viewComptiaNetwork()
    {
        return view('pages.courses.comptia-network');
    }

    public function viewIibaCbap()
    {
        return view('pages.courses.iiba-cbap');
    }

    public function viewIibaEcba()
    {
        return view('pages.courses.iiba-ecba');
    }

    public function viewPmiCapm ()
    {
        return view('pages.courses.pmi-capm');
    }
}
