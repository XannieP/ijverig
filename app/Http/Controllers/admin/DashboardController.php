<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Booking;
use App\Models\User;
use Validator;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function __construct()
    {
        # Checks if user is logged in and has admin rights
        $this->middleware(['auth', 'admin']);
    }

    public function index() {

    	$bookings = Booking::orderBy('date', 'asc')->where('online',0)->count();

    	$check = Booking::orderBy('date', 'asc')->where('online',1)->whereDate('date', '>=', Carbon::today())->first();

        if (!empty($check)) {
            $first = $check;
        }

        else {
            $first = null;
        }

    	return view('admin/dashboard', compact('bookings', 'first'));
    }
}


