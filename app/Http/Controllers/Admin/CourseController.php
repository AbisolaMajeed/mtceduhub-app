<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public $courses;

    public function __construct()
    {
        $this->courses = new Course();
    }

    public function index()
    {
        $courses = $this->courses->all();
        return view('pages.admin.courses', compact('courses'));
    }

    public function getArchivedCourses()
    {
        $courses = $this->courses->onlyTrashed()->get();
        return view('pages.admin.courses-deleted', compact('courses'));
    }

    public function addCourse()
    {
        return view('pages.admin.add-course');
    }

    public function archiveCourse($id)
    {
        $this->courses->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Course archived successfully');
    }
    
    public function restoreCourse($id)
    {
        $this->courses->where('id', $id)->onlyTrashed()->restore();
        return redirect()->back()->with('status', 'Course restored successfully');
    }

    public function saveAddCourse()
    {
        $course_path = Storage::disk('public')->put('courses-cover', request()->file('cover'));
        
        $this->courses->create([
            "title" =>request()->title,
            "aliase" =>request()->aliase,
            "category" =>request()->category,
            "student_enrolled" =>request()->student_enrolled,
            "course_description_title" =>request()->course_description_title,
            "course_content" =>request()->course_content,
            "learning_objectives_1" =>request()->learning_objectives_1,
            "learning_objectives_2" =>request()->learning_objectives_2,
            "learning_objectives_3" =>request()->learning_objectives_3,
            "learning_objectives_4" =>request()->learning_objectives_4,
            "learning_objectives_5" =>request()->learning_objectives_5,
            "learning_objectives_6" =>request()->learning_objectives_6,
            "learning_outcomes_1" =>request()->learning_outcomes_1,
            "learning_outcomes_2" =>request()->learning_outcomes_2,
            "learning_outcomes_3" =>request()->learning_outcomes_3,
            "learning_outcomes_4" =>request()->learning_outcomes_4,
            "rating" =>request()->rating,
            "cover" => config('app.url').'/'.($course_path)
        ]);

        return redirect()->route('dashboard.courses')->with('status', 'Course uploaded successfully');
    }
}
