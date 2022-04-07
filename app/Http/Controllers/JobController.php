<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Job;
use App\Models\DeliveryMode;
use App\Models\DeliveryRange;
use App\Models\WorkTime;

class JobController extends Controller
{
    public function show() {
        $workTime = WorkTime::all();
        $deliveryRange = DeliveryRange::all();
        $deliveryMode = DeliveryMode::all();

        $data = [
            'times' => $workTime,
            'ranges' => $deliveryRange,
            'modes' => $deliveryMode,
        ];
        return view('main.dashboard.job.post')
                    ->with($data);
    }

    public function list() {
        $user_id = session()->get('rookeys_id');
        $jobs = Job::where('user_id', $user_id)->get();
        return view('main.job.list')
                    ->with('jobs', $jobs);
    }

    public function listAll() {
        $jobs = Job::with('delivery_mode')->with('delivery_range')->with('work_time')->get();
        return view('main.dashboard.job.list')
                    ->with('jobs', $jobs);
    }

    public function addJob(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'job_title' => 'required',
                'job_description' => 'required',
                'sector' => 'required',
                'location' => 'required',
                'deadline' => 'required',
                'language' => 'required',
                'hour' => 'required',
                'recruiter_type' => 'required',
                'contract_type' => 'required',
                'salary_range' => 'required',
            ]);

            if($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $user_id = session()->get('user_id');

            $createJob = Job::create([
                'hid' => uniqid(),
                'user_id' => $user_id,
                'job_title' => $request->job_title,
                'job_description'  => $request->job_description,
                'sector' => $request->sector,
                'location' => $request->location,
                'deadline' => $request->deadline,
                'language' => $request->language,
                'contract_type' => $request->contract_type,
                'recruiter_type' => $request->recruiter_type,
                'hour' => $request->hour,
                'salary_range' => $request->salary_range,
            ]);

            if($createJob) {
                return redirect('job/list')->with('success', 'Job posted successfully');
            }
            return back()->with('error', ' Unable to post job, Try again later');

        } catch(\Exception $ex) {
            dd($ex);
            return redirect('/');
        }
    }
}
