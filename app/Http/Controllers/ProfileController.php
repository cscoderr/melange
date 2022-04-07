<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show() {
        $user_id = session()->get('user_id');
        $users = User::where('id', $user_id)->first();
        return view('main.dashboard.profile.edit')
                ->with('user', $users);
    }

    public function updateProfile(Request $request) {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'nullable',
            'logo' => 'nullable|mimes:jpg,jpeg,png'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $originalName = null;
        if(session()->get('user')->user_type == 2) {
            $image              =        $request->logo;
            $folder             =        'uploads/logo/';
            $originalName       =         'rookeys' . '-' . uniqid() . rand(1000, 9999) . '.' . $image->extension();
            $pathName           =         $image->getPathName();
            move_uploaded_file($pathName, $folder . $originalName);
        }
        $user_id = session()->get('rookeys_id');

        $updateUser = User::where('id', $user_id)->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'logo' => $originalName
        ]);

        if($updateUser) {
            return redirect()->back()->with('success', 'Profile updated successfully');
        }
        return redirect()->back()->with('error', 'Unable to updated profile');

    }

    public function change_password() {
        return view('main.dashboard.profile.change_password');
    }
}
