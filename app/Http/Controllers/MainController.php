<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // mostrare tutti i data in home 
    public function home()
    {
        $projects = Project::all();
        return view('pages.home', compact('projects'));
    }

    // mostra la pagina myHome
    public function myHome()
    {
        return view('pages.myHome');
    }


    // funzione per mostrare la pagina di ogni progetto
    public function projectShow(Project $project)
    {
        return view('pages.project-show', compact('project'));
    }

}