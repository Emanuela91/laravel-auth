<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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

    // funzione per creare un nuovo progetto
    public function create()
    {
        return view('pages.create');
    }
    // store per creazione nuovo progetto 
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:64|unique:projects',
            'description' => 'nullable|string|',
            'main_image' => 'required|string|unique:projects',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|string|unique:projects',

        ]);

        $project = Project::create($data);
        return redirect()->route('project.show', $project);
    }

}