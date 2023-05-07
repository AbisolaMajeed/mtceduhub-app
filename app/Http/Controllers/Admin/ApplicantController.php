<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public $applicants;

    public function __construct()
    {
        $this->applicants = new Register;
    }

    public function index()
    {
        $applicants = $this->applicants->all();
        return view('pages.admin.applicants', compact('applicants'));
    }

    public function getArchivedApplicants()
    {
        $applicants = $this->applicants->onlyTrashed()->get();
        return view('pages.admin.applicants-deleted', compact('applicants'));
    }

    public function archiveApplicant($id)
    {
        $this->applicants->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Applicant archived successfully');
    }
    
    public function restoreApplicant($id)
    {
        $this->applicants->where('id', $id)->onlyTrashed()->restore();
        return redirect()->back()->with('status', 'Applicant restored successfully');
    }

    public function moveApplicantToTraining($id)
    {
        $this->applicants->where('id', $id)->update(['stage' => 'IN-TRAINING']);
        return redirect()->back()->with('status', 'Applicant moved to TRAINING stage successfully');
    }

    public function moveApplicantToLead($id)
    {
        $this->applicants->where('id', $id)->update(['stage' => 'LEAD']);
        return redirect()->back()->with('status', 'Applicant moved to LEAD stage successfully');
    }
}
