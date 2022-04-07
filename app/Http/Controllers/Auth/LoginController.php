<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Hash;

class LoginController extends Controller
{

    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $user = User::where('email', $request->email)->first();
            $password = $request->input('password');

            if (!empty($user)) {
                if (Hash::check($password, $user->password)) {
                    // dd($user->password);
                    session()->put('user_id', $user->id);
                    session()->put('user', $user);
                    // if($user->user_type == 1 && ($user->first_survey_completed == 0 || $user->second_survey_completed == 0)) {
                    //     return redirect('/survey');
                    // }
                    return redirect('/dashboard');
                } else {
                    return back()->with('error', 'Invalid email or password')->withInput();
                }
            }
            return back()->with('error', 'Invalid email or password')->withInput();

        } catch(\Exception $ex) {
            return redirect('/');
        }
    }
}
