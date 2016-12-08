<?php

namespace App\Http\Controllers;

use App\Termin;
use App\Userappointment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Carbon;

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

        $appointment = Termin::orderBy('date', 'asc')->get();

        $id = Auth::id();

        $i = 0;


        return view('home', ['appointment' => $appointment], ['userappointment' => $userappointment], ['id' => $id], ['i' => $i]);
    }

    public function confirm()
    {


        return view('home');
    }

    public function list()
    {

        return view('list');
    }

    public function deny()
    {

        return view('home');
    }


}
