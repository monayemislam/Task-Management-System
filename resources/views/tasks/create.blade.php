

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Task</h2>
    <a href="{{ route('task-list') }}" class="btn btn-primary mb-3">Task List</a>
    <form action="{{ route('task-store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="task_name" class="form-label">Task Name:</label>
            <input type="text" name="task_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="project_code" class="form-label">Project Code:</label>
            <select name="project_code" class="form-control" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->project_code }}">{{ $project->project_code }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="assigned_to" class="form-label">Assigned To:</label>
            <select name="assigned_to" class="form-control" required>
                @foreach ($assignees as $assignee)
                    <option value="{{ $assignee->id }}">{{ $assignee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="working">Working</option>
                <option value="done">Done</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>
@endsection
