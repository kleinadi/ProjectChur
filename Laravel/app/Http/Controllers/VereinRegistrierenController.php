<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VereinRegistrierenController extends Controller
{
    /**
    * Display VereinRegistrieren site
    **/ 
    public function showView() 
    {
        return view('vereinregistrieren');
    }


}