<?php

namespace App\Http\Controllers;

use App\User;
use App\Verein;
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

        return view('vereinreg');
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

        return redirect('home');

    }


}