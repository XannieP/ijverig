<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Input;

use App\models\Booking;

use DB;
use Validator;
use Carbon\Carbon;
use App\Mail\ReserveringAanvraag;
use Illuminate\Support\Facades\Mail;

class ReserverenController extends Controller
{
    public function index()
    {   

    	return view('welcome');
    }

    public function checker(Request $request)
    {
        $data = request()->validate([
            'date' => 'required',
        ]);

        $input = request('date');

        $booking = Booking::where('date', $input)->where('online',1)->get();

        $carbon = new Carbon($input);
        $succes = $carbon->format('d-m-Y');

        if ($booking->isEmpty()) {
            return redirect()->back()->with('complete', $succes." is beschikbaar.");
        
        }
        
        else {
            return redirect()->back()->with('danger', $succes . ' is helaas niet beschikbaar.');
        }



       
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'date' => 'required',
            'dagdeel' => 'required|in:ochtend,middag,avond,ochtend + middag,middag + avond,ochtend + middag + avond',
            'vergaderruimte' => 'required',
            'phonenumber' => 'required',
            
        ]);

		$validate = Validator::make(Input::all(), [
			'g-recaptcha-response' => 'required|captcha'
		]);


        $data = array(
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'date' => request('date'),
            'dagdeel' => request('dagdeel'),
            'vergaderruimte' => request('vergaderruimte'),
            'description' => request('description'),
            'phonenumber' => request('phonenumber'),
        );

        $reserveren = new Booking();
        
        $reserveren->firstname  = request('firstname');
        $reserveren->lastname  = request('lastname');
        $reserveren->email  = request('email');
        $reserveren->date  = request('date');
        $reserveren->dagdeel  = request('dagdeel');
        $reserveren->vergaderruimte  = request('vergaderruimte');
        $reserveren->description = request('description');
        $reserveren->phonenumber = request('phonenumber');
 
        $reserveren->save();

        Mail::to(request('email')->send(new ReserveringAanvraag($data)));

        return redirect()->back()->with('success', 'Reservering succesvol verstuurd check uw email voor bevestiging.');
    }

}


