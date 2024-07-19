<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Booking;
use Validator;

use App\Mail\ReserveringAccepteren;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function __construct()
    {
        # Checks if user is logged in and has admin rights
        $this->middleware(['auth', 'admin']);
    }

    public function nieuw() {

    	$bookings = Booking::orderBy('date', 'asc')->where('online',0)->get();

    	return view('admin/reserveringen/nieuw', compact('bookings'));
    }


    public function accepteren(Request $request, $id)
    {
        $edit = Booking::find($id);

        $edit->online = 1;

        $edit->save();

        $data = array(
            'firstname' => $edit->firstname,
            'lastname' => $edit->lastname,
            'email' => $edit->email,
            'date' => $edit->date,
            'dagdeel' => $edit->dagdeel,
            'vergaderruimte' => $edit->vergaderruimte,
            'description' => $edit->description,
            'phonenumber' => $edit->phonenumber,
        );

        Mail::to($edit->email)->send(new ReserveringAccepteren($data));

        Mail::to('edwinplieger@wsa-ict.nl')->send(new ReserveringAccepteren($data));

        return redirect('/admin/reserveringen/nieuw')->with('success', 'Reservering succesvol geaccepteerd.');
    }

    public function undo(Request $request, $id)
    {
        $edit = Booking::find($id);

        $edit->online = 0;

        $edit->save();

        return redirect()->back()->with('success', 'Reservering niet meer geaccepteerd.');
    }

    public function show($id)
    {
        $show = Booking::find($id);

        return view('admin.reserveringen.edit')->with('show',$show);
    }

    public function edit($id)
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'date' => 'required',
            'description' => 'required',
            'dagdeel' => 'required',
            'vergaderruimte' => 'required',
            'phonenumber' => 'required',
        ]);

        $reserveren = Booking::find($id);
        
        $reserveren->firstname  = request('firstname');
        $reserveren->lastname  = request('lastname');
        $reserveren->email  = request('email');
        $reserveren->date  = request('date');
        $reserveren->dagdeel  = request('dagdeel');
        $reserveren->vergaderruimte  = request('vergaderruimte');
        $reserveren->description = request('description');
        $reserveren->phonenumber = request('phonenumber');
 
        $reserveren->save();

        return redirect()->back()->with('success', 'Reservering succesvol bijgewerkt');   
    }

    public function delete($id)
    {
        $show = Booking::find($id);
        $show->delete();
        return redirect()->back()->with('success', 'Reservering succesvol verwijderd');  
    }







    

    public function gereserveerd() {
        $bookings = Booking::orderBy('date', 'asc')->where('online',1)->get();

        return view('admin/reserveringen/gereserveerd', compact('bookings'));
    }

    public function archief() {
        $bookings = Booking::orderBy('date', 'desc')->where('online',1)->get();

        return view('admin/reserveringen/archief', compact('bookings'));
    }

    public function aanmaken() {
    	return view('admin/reserveringen/aanmaken');
    }

    public function create(Request $request)
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'date' => 'required',
            'description' => 'required',
            'dagdeel' => 'required',
            'vergaderruimte' => 'required',
            'phonenumber' => 'required',
        ]);

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

        return redirect('/admin/reserveringen/aanmaken')->with('success', 'Reservering succesvol aangemaakt.');
    }

}
