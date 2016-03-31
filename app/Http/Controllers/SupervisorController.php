<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    public function home()
    {
        return view('supervisor.pages.home');
    }

    public function addtopic() 
    {
        return view('supervisor.pages.addtopic');
    }

    public function viewtopics() 
    {
        return view('supervisor.pages.viewtopics');
    }
}
