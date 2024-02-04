<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('assignee')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $projects = Project::all();
        $assignees = User::all();

        return view('tasks.create', compact('projects', 'assignees'));
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return redirect()->route('task-list')->with('success', 'Task created successfully.');
        alert('success');
    }

    public function myTask()
    {
        $userId = auth()->user()->id;
        $tasks = Task::with('assignee')
            ->where('assigned_to', $userId)
            ->get();

        return view('tasks/user-task', compact('tasks'));
    }

    public function updateStatus(Request $request, $id)
    {

        $task = Task::findOrFail($id);
        $task->update(['status' => $request->input('status')]);

        return redirect()->back();
    }

}
