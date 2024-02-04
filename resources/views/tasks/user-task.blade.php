

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Tasks</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Project Code</th>
                <th>Description</th>
                <th>Assigned To</th>
                <th>Status</th>
                <th>Action</th>
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
                    <td>
                        <form action="{{ route('status-update', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <select name="status" class="form-select" required>
                                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="working" {{ $task->status == 'working' ? 'selected' : '' }}>Working</option>
                                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
