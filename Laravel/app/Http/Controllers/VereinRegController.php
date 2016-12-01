<?php

namespace App\Http\Controllers;

use App\User;
use App\Verein;
use App\Userclub;
use App\Termin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VereinRegController extends Controller
{
    /**
     * Display ALL Tasks
     **/
    public function index()
    {
        $users = User::orderBy('created_at', 'asc')->get();


        return view('vereinreg', ['users' => $users]);
    }

    /**
     * Add a new Task
     */

    public function newVerein(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required|max:255',]);

        if ($validator->fails())
        {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $club = new Verein;
        $club->name = $request->name;
        $club->save();

        $userclub = new Userclub;
        $userclub->fk_users = ;
        $userclub->fk_club = $club->id;
        $userclub->save();

        $appointment = Termin::orderBy('created_at', 'asc')->get();

        return view('home', ['appointment' => $appointment]);

    }


}