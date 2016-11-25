<?php

namespace App\Http\Controllers;

use App\Termin;

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
        $appointment = Termin::orderBy('created_at', 'asc')->get();

        return view('home', ['appointment' => $appointment]);
    }
}
