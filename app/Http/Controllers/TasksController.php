<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($taskId)
    {
        $task = Task::find($taskId);

        return  view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $newTask = request()->all();

        $task = new Task();
        $task->name = $newTask['title'];
        $task->description = $newTask['description'];
        $task->completed = false;

        $task->save();

        return redirect('/tasks');
    }
}
