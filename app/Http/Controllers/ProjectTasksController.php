<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store( Project $project)
    {
        $project->addTask(request('body'));

        return redirect(route('project.show', $project));
    }

    public function update( Project $project, Task $task )
    {
        $task->update(request()->validate(['body' => 'required']));

        request('completed') ? $task->complete() : $task->incomplete();

        return redirect(route('project.show', $project));
    }
}