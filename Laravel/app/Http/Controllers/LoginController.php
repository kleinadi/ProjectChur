<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
    * Display login site
    **/ 
    public function showView() 
    {
        return view('login');
    }


}