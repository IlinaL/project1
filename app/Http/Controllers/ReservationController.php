<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;

class ReservationController extends Controller
{
    
    public function index()
    {
        return view('reservation');
    }


    public function store(Request $request)
    {
        $data = request()->validate([
            'first-name'=> 'required',
            'last-name'=> 'required',
            'email'=> 'required|email',
            'number'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
        ]);

       Mail::to('test@test.com')->send(new ReservationMail($data));
       return redirect()->route('confirmation.index')->with ('success_message', 'Thanks for the reservation.');

    }
}