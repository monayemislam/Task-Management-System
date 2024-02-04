@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Task List</h2>

    <a href="{{ route('task-create') }}" class="btn btn-primary mb-3">Create Task</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Project Code</th>
                <th>Description</th>
                <th>Assigned To</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->project_code }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->assignee->name }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
