<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;
use App\Models\DeliveryMode;
use App\Models\WorkTime;
use App\Models\DeliveryRange;
use Validator;
use App\Models\Courier as Couriers;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

     public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required|email|unique:users',
                'phone_number' => 'nullable|unique:users',
                'address' => 'required',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required',
            ], 
            [
                'required' => 'Fill out empty fields',
                'confirmed' => 'Password does not match',
            ]);

            if($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $createUser = User::create([
                'full_name'         =>         $request->full_name,
                'email'             =>         $request->email,
                'phone_number'      =>         $request->phone_number,
                'address' => $request->address,
                'password'          =>         Hash::make($request->password),
                'user_type_id'      =>         2,
            ]);

            if($createUser) {
                return redirect('login')->with('success', 'Registration successful, Login to continue');
            }
            return back()->with('error', 'Registration fail, Try again later');
        } catch(\Exception $ex) {
            return redirect('/');
        }
    }

    public function registerType() {
        return view('auth.register_option');
    }

    public function courier() {
        $modes = DeliveryMode::all();
        $times = WorkTime::all();
        $ranges = DeliveryRange::all();
        $data = [
            'modes' => $modes,
            'times' => $times,
            'ranges' => $ranges,
        ];
        return view('auth.courier.register')
                ->with($data);
    }

    public function courierRegister(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'sector' => 'required',
                'position' => 'required',
                'employment_status' => 'required',
                'availability' => 'required',
                'liability_status' => 'required',
                'smart_phone' => 'required',
                'forename' => 'required',
                'surname' => 'required',
                'dob' => 'required',
                'uk_citizen' => 'required',
                'uk_authorized' => 'required',
                'insurance_number' => 'required',
                'address' => 'required',
                'valid_license' => 'required',
                'passport' => 'required',
                'driver_license' => 'required',
                'contact_time' => 'required',
            ], 
            [
                'required' => 'Fill out empty fields'
            ]);

            if($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $createUser = Couriers::create($request->all());

            if($createUser) {
                return redirect('courier/completed');
            }
            return back()->with('error', 'Registration fail, Try again later');
        } catch(\Exception $ex) {
            dd($ex);
            return redirect('/');
        }
    }

    public function courierCompleted() {
        return view('auth.courier.success');
    }

    public function registerOption(Request $request) {
        if($request->reg_option == null) {
            return back();
        } else if($request->reg_option == 1 || $request->reg_option == 2) {
             return redirect('/register');
        } else if($request->reg_option == 3) {
            return redirect('/quote');
        } else {
            return redirect('/courier/register');
        }
    }

    public function quote() {
        return view('auth/quote');
    }
}
