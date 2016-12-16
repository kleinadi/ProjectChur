<?php

namespace App\Http\Controllers;

use App\Termin;
use App\User;
use App\Userappointment;
use Illuminate\Support\Facades\Auth;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Home site
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userappointment = Userappointment::orderBy('created_at', 'desc')->get();

        $appointment = Termin::orderBy('date', 'asc')->orderBy('time', 'asc')->get();

        $id = Auth::id();

        $i = 0;


        return view('home', ['appointment' => $appointment], ['userappointment' => $userappointment], ['id' => $id], ['i' => $i]);
    }

    /**
     * Set Confirmation on true
     *
     */

    public function confirm($eventId)
    {
        $id = Auth::id();

        $userappointment = new Userappointment;
        $userappointment->where('fk_users', $id)->where('fk_appointment', $eventId)->update(['confirmed' => 1]);



        return $this->index();
    }

    /**
     * Show list of users from the appointment
     *
     */

    public function liste($eventId)
    {

        $userappointment = new Userappointment;
        $userappointment = $userappointment->where('fk_appointment', $eventId)->get();

        $users = User::all();


        return view('liste', ['userappointment' => $userappointment], ['users' => $users]);
    }

    /**
     * Set Confirmation on false
     *
     */

    public function deny($eventId)
    {
        $id = Auth::id();

        $userappointment = new Userappointment;
        $userappointment->where('fk_users', $id)->where('fk_appointment', $eventId)->update(['confirmed' => 0]);



        return $this->index();
    }


}
