<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
    * Display about site
    **/ 
    public function showView() 
    {
        return view('about');
    }


}