<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        return view('projects.index', [
            'projects' => auth()->user()->accessibleProjects()
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
            'owner_id' => auth()->user()->id,
            'title' => $validated['title'],
            'description' => $validated['description']
        ]);

        return $this->index();

    }

    public function edit( Project $project )
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update( Project $project)
    {
        $project->update($this->validateRequest());

        return $this->index();
    }

    protected function validateRequest(): array
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required'
        ]);
    }
}