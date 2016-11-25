<?php

namespace App\Http\Controllers;

use App\User;
use App\Verein;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerminRegController extends Controller
{
    /**
     * Display ALL Tasks
     **/
    public function index()
    {

        return view('terminreg');
    }

    /**
     * Add a new Task
     */

    public function newTermin(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required|max:255',]);

        if ($validator->fails())
        {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $appointment = new Termin;
        $appointment->name = $request->name;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->place = $request->place;
        $appointment->location = $request->location;
        $appointment->leader = $request->leader;
        $appointment->save();

        return view('home');

    }


}