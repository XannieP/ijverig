<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Booking;
use App\Rules\AvailableChecker;
use App\Mail\ReserveringAanvraag;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class Reserveren extends Component
{
    public $lastname, $firstname, $phonenumber, $email, $dagdeel, $vergaderruimte, $description, $date, $checker;

    public function render()
    {
        return view('livewire.reserveren');
    }

    private function resetInput()
    {
        $this->firstname = null;
        $this->lastname = null;
        $this->phonenumber = null;
        $this->email = null;
        $this->dagdeel = null;
        $this->vergaderruimte = null;
        $this->description = null;
        $this->date = null;
    }

    protected $rules = [
        'checker' => 'required|date|after:today',
        ];

    protected $messages = [
        'checker.after' => 'Selecteer een datum na vandaag.',
    ];
 
    public function updated($checker)
    {
        $this->validateOnly($checker);
    }

    public function checker() {

        $this->validate([
            'checker'  => 'required|date|after:today',
        ],
        [
            'checker.after' => 'Selecteer een datum na vandaag.',
            'checker.required' => 'Selecteer een datum.',
        ]);

        $booking = Booking::where('date', $this->checker)->where('online',1)->first();

        $date = Carbon::parse($this->checker)->format('d-m-Y');

        if ($booking == null) {
            $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'info', 
                    'message' => 'Beschikbaarheids Bevestiging', 
                    'text' => $date.' is nog beschikbaar.',
            ]);
        } else {
            $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'warning', 
                    'message' => 'Beschikbaarheids Bevestiging', 
                    'text' => $date.' is bezet in de '. $booking->vergaderruimte . ' in de ' . $booking->dagdeel . '.'

            ]);
        }


        $this->checker = null;
    }

    public function store()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required|digits:10',
            'email' => 'required|email:rfc,dns',
            'dagdeel' => 'required',
            'vergaderruimte' => 'required',
            'date'  => 'required|date|after:today',
            'description' => 'max:1000',
        ],
        [
            'email.email' => 'Dit is niet een geldig email adres.',
            'phonenumber.digits' => 'Telefoonnummer moet 10 getallen bevatten.',
            'description.max' => 'Maximaal 1000 tekens.',
            'date.after' => 'Selecteer een datum na vandaag.',
        ]);

        $data = array(
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'date' => $this->date,
            'dagdeel' => $this->dagdeel,
            'vergaderruimte' => $this->vergaderruimte,
            'description' => $this->description,
            'phonenumber' => $this->phonenumber,
        );

        Booking::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phonenumber' => $this->phonenumber,
            'email' => $this->email,
            'dagdeel' => $this->dagdeel,
            'vergaderruimte' => $this->vergaderruimte,
            'description' => $this->description,
            'date' => $this->date,
        ]);

        Mail::to($this->email)->send(new ReserveringAanvraag($data));

        Mail::to('edwinplieger@wsa-ict.nl')->send(new ReserveringAanvraag($data));

        $this->resetInput();

        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Reservering succesvol aangevraagd!', 
                'text' => 'Bekijk u mail voor bevestiging.'
        ]);
    }
}
