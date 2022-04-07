<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;

class CourierController extends Controller
{
    public function list() {
        $couriers = Courier::with('delivery_mode')->with('delivery_range')->with('work_time')->get();
        return view('main.dashboard.courier.list')
                ->with('couriers', $couriers);
    }

    public function verified() {
        $couriers = Courier::with('delivery_mode')->with('delivery_range')->with('work_time')->where('status', 1)->get();
        return view('main.dashboard.courier.verified')
                ->with('couriers', $couriers);
    }

    public function unverified() {
        $couriers = Courier::with('delivery_mode')->with('delivery_range')->with('work_time')->where('status', 0)->get();
        return view('main.dashboard.courier.unverified')
                ->with('couriers', $couriers);
    }

    public function verify($id) {
        if(!empty($id)) {
            $isVerified = Courier::where('id', $id)->update(['status' => 1]);
            if($isVerified) {
                return back()->with('success', 'Courier verified successfully');
            } else {
                return back()->with('error', 'Something went wrong, Try again later');
            }
        }
    }
}
