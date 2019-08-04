<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    private $validate = [
        'title' => ['required', 'min: 6'],
        'description' => ['required', 'min: 15']
    ];

    private function showFeedBackMessage($message)
    {
        return session()->flash('success', $message);
    }

    public function index()
    {
        $tasks = Task::all()->sortKeysDesc();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return  view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate($this->validate);

        $attributes['completed'] = false;

        Task::create($attributes);

        $this->showFeedbackMessage("Task created successfully");

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        $updatedAttributes = request()->validate($this->validate);

        $updatedAttributes['completed'] = false;

        $task->update($updatedAttributes);

        $this->showFeedbackMessage("Task updated successfully");

        return  view('tasks.show', compact('task'));
    }

    public function destroy(Task $task)
    {
        $task->delete();

        $this->showFeedbackMessage("Task deleted successfully");

        return redirect('/tasks');
    }

    public function complete(Task $task)
    {
        $task->update(['completed' => true]);

        $this->showFeedbackMessage("Task completed successfully");

        return redirect('/tasks');
    }

}
