<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courier;
use App\Models\Job;

class HomeController extends Controller
{
    public function index() {
        $user = User::all()->count();
        $courier = Courier::all()->count();
        $job = Job::all()->count();
        $verified = Courier::where('status', 1)->get()->count();
        $postedJob = Job::where('user_id', session()->get('user_id'))->get()->count();
        $data = [
            'users' => $user,
            'couriers' => $courier,
            'job' => $job,
            'verified' => $verified,
            'postedJob' => $postedJob
        ];
        return view('main.dashboard.index')
                ->with($data);
    }

    public function job(Request $request) {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return view('main.job.index')
                ->with('jobs', $jobs);
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('login');
    }

    public function frontend() {
        return view('welcome');
    }

    public function about() {
        return view('main.frontend.about');
    }

    public function service() {
        return view('main.frontend.service');
    }

    public function contact() {
        return view('main.frontend.contact');
    }

    public function team() {
        return view('main.frontend.team');
    }

    public function employers() {
        return view('main.frontend.employers');
    }

    public function privacy() {
        return view('main.frontend.privacy');
    }

    public function jobModal($hid) {
        $jobDetails = Job::where('hid', $hid)->first();
        return view('main.job.job_modal')->with('jobDetails', $jobDetails);
    }
}
