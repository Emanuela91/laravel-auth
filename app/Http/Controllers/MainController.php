<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Psy\Command\EditCommand;
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
            'name' => 'required|string|min:3|max:64|unique:projects,name',
            'description' => 'nullable|string|',
            'main_image' => 'required|string|unique:projects,main_image',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|string|unique:projects,repo_link',

        ]);

        $project = Project::create($data);
        return redirect()->route('project.show', $project);
    }

    // funzione per cancellare
    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('home');
    }

    // funzione per Edit
    public function edit(Project $project)
    {
        return view('pages.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:64|unique:projects,name' . $project->id,
            'description' => 'nullable|string|',
            'main_image' => 'required|string|unique:projects,main_image' . $project->id,
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|string|unique:projects,repo_link' . $project->id,

        ]);
        $project->update($data);
        $project->save();

        return redirect()->route('home');

    }

}