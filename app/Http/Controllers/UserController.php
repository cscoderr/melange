<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list() {
        $users = User::all();
        return view('main.dashboard.user.list')
                ->with('users', $users);
    }
}
