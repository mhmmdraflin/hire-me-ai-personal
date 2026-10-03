<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RecruiterController extends Controller
{
    public function index_dashboard()
    {
        $data['title'] = 'Recruiter Dashboard';
        
        // Mock recruiter data for frontend showcase
        $data['recruiter'] = (object) [
            'FIRST_NAME' => 'Demo',
            'LAST_NAME' => 'Recruiter',
            'EMAIL_USER' => 'recruiter@hireme.ai',
        ];

        return 
        view('recruiter.header', $data).
        view('recruiter.dashboard', $data).
        view('recruiter.footer', $data);
    }

    public function add_job()
    {
        $data['title'] = 'Add Job';
        return 
        view('recruiter.header', $data).
        view('recruiter.add_job', $data).
        view('recruiter.footer', $data);
    }

    public function index_jobs()
    {
        $data['title'] = 'Job Listings';
        return view('recruiter.header', $data).view('recruiter.jobs', $data).view('recruiter.footer', $data);
    }

    public function index_candidates()
    {
        $data['title'] = 'Candidate Tracking';
        return view('recruiter.header', $data).view('recruiter.candidates', $data).view('recruiter.footer', $data);
    }

    public function index_analytic()
    {
        $data['title'] = 'Recruitment Analytics';
        return view('recruiter.header', $data).view('recruiter.analytic', $data).view('recruiter.footer', $data);
    }
}
