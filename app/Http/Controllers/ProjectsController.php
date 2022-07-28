<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->get()
        ]);
    }

    public function show( Project $project )
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store( Request $request )
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description']
        ]);

        return redirect(route('projects.index'));

    }
}