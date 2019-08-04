<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->sortKeysDesc();
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

    public function store(Request $request)
    {
        $request->flashOnly(['title', 'description']);

        $validatedData = $request->validate([
            'title' => 'required | min: 6',
            'description' => 'required | min: 15'
        ]);

        $newTask = $validatedData;

        $task = new Task();
        $task->name = $newTask['title'];
        $task->description = $newTask['description'];
        $task->completed = false;

        $task->save();

        if ($validatedData->fails()) {
            return redirect('/tasks')
                ->withInput();
        }
    }
}
