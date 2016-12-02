<?php

namespace App\Http\Controllers;

use App\User;
use App\Verein;
use App\Termin;
use App\Userclub;
use App\Userappointment;
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
        $club = Verein::orderBy('created_at', 'asc')->get();

        return view('terminreg', ['club' => $club]);
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


        $userclub = Userclub::orderBy('created_at', 'asc')->get();


        foreach($userclub as $usercluby) {
            if ($request->appointmentclub == $usercluby->fk_club) {
                $userappointment = new Userappointment;
                $userappointment->fk_users = $usercluby->fk_users;
                $userappointment->fk_appointment = $appointment->id;
                $userappointment->save();

            }
        }

        $appointment = Termin::orderBy('created_at', 'asc')->get();

        $userappointment = Userappointment::orderBy('created_at', 'asc')->get();


        return view('home', ['appointment' => $appointment], ['userappointment' => $userappointment]);

    }


}