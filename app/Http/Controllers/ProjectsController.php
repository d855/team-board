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

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show( Project $project)
    {
        $this->authorize('manage', $project);

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
         auth()->user()->projects()->create($this->validateRequest());

        return redirect(route('project.index'));

    }

    public function edit( Project $project )
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update( Project $project)
    {
        $this->authorize('update', $project);
        $project->update($this->validateRequest());

        return redirect(route('project.show', $project));
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy( Project $project )
    {
        $this->authorize('manage', $project);

        $project->delete();

        return redirect(route('project.index'));
    }

    protected function validateRequest(): array
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'notes' => 'nullable'
        ]);
    }
}