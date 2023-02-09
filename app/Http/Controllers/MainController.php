<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        return view('pages.home', compact('projects'));
    }

    public function myHome()
    {
        return view('pages.myHome');
    }

}