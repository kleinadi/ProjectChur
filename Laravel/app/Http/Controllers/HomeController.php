<?php

namespace App\Http\Controllers;

use App\Termin;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userappointment = Userappointment::orderBy('created_at', 'asc')->get();

        $appointment = Termin::orderBy('created_at', 'asc')->get();

        $id = Auth::id();

        $i = 0;

        return view('home', ['appointment' => $appointment], ['userappointment' => $userappointment], ['id' => $id], ['i' => $i]);
    }
}
