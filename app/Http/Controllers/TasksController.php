<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function home()

    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function index()

    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function about()

    {
        return view('about');
    }

    public function show(Task $task)

    {
        return view('tasks.show', compact('task'));
    }

}
