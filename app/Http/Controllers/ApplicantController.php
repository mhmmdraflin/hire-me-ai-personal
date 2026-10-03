<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApplicantController extends Controller
{
    public function index_dashboard()
    {
        $data['title'] = 'Applicant Dashboard';

        $data['job'] = DB::select('
        SELECT 
            md_jobs.*, 
            job_category.CATEGORY_NAME, 
            md_companies.NAME_COMP, 
            md_companies.INDUSTRY_COMP,
            md_companies.DESC_COMP, 
            md_location.CITY, 
            md_location.PROVINCE, 
            md_location.COUNTRY
        FROM md_jobs
        JOIN job_category ON md_jobs.ID_CATEGORY = job_category.ID_CATEGORY
        JOIN md_companies ON md_jobs.ID_COMP = md_companies.ID_COMP
        JOIN md_location ON md_companies.ID_LOCATION = md_location.ID_LOCATION
    ');

        return view('applicant.header') .
            view('applicant.dashboard', $data) .
            view('applicant.footer');
    }

    public function checkCv(Request $request)
    {
        // Validasi
        $request->validate([
            'cv_file' => 'required|file|mimes:pdf|max:1024',
            'job_category' => 'required|string'
        ]);

        // Simpan sementara dan ambil path
        $file = $request->file('cv_file');
        $pdfText = (new \Smalot\PdfParser\Parser())->parseFile($file->getPathname())->getText();

        // Kirim ke FastAPI
        $response = Http::post('http://127.0.0.1:8001/screen', [
            'cv_text' => $pdfText,
            'job_category' => $request->input('job_category'),
        ]);

        // if ($response->successful()) {
        //     return view('cv_result', [
        //         'result' => $response->json()
        //     ]);
        // }

        if ($response->successful()) {
        $result = $response->json();

        return 
        view('applicant.header') .
        view('applicant.cv_result', ['result' => $result]) .
        view('applicant.footer');
    } else {
        return back()->with('error', 'Gagal memproses CV. Coba lagi nanti.');
    }

        // return back()->with('error', 'Gagal menghubungi AI Screening');
    }


    public function index_interview()
    {
        $data['title'] = 'Applicant Interview';
        return
            view('applicant.header') .
            view('applicant.interviewai', $data) .
            view('applicant.footer');
    }

    public function index_personality()
    {
        $data['title'] = 'Personality Test';
        return
            view('applicant.header') .
            view('applicant.personality', $data) .
            view('applicant.footer');
    }

    public function index_gamification()
    {
        $data['title'] = 'Gamification';
        return
            view('applicant.header') .
            view('applicant.gamification', $data) .
            view('applicant.footer');
    }

    public function index_recruiter_dashboard()
    {
        $data['title'] = 'recruiter Dashboard';
        return
            view('applicant.header') .
            view('applicant.dashboard', $data) .
            view('applicant.footer');
    }
}
