<?php

    use App\Http\Controllers\ProjectsController;
    use App\Http\Controllers\ProjectTasksController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectsController::class, 'index'])->middleware(['auth'])->name('project.index');

Route::get('/projects/create', [ProjectsController::class, 'create'])->middleware(['auth'])->name('project.create');

Route::post('/projects', [ProjectsController::class, 'store'])->middleware(['auth'])->name('project.store');

Route::get('/projects/{project:slug}', [ProjectsController::class, 'show'])->middleware(['auth'])->name('project.show');

Route::patch('/projects/{project:slug}', [ProjectsController::class, 'update'])->middleware(['auth'])->name('project.update');

Route::get('/projects/{project:slug}/edit', [ProjectsController::class, 'edit'])->middleware(['auth'])->name('project.edit');

Route::delete('/projects/{project:slug}/delete', [ProjectsController::class, 'destroy'])->middleware(['auth'])->name('project.destroy');

Route::post('/project/{project:slug}/tasks', [ProjectTasksController::class, 'store'])->middleware(['auth'])->name('project.tasks');

Route::patch('/project/{project:slug}/tasks/{task}', [ProjectTasksController::class, 'update'])->middleware(['auth'])
    ->name('task.update');



require __DIR__.'/auth.php';