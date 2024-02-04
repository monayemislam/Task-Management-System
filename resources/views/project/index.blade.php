<!-- resources/views/projects/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Projects</h2>

        <a href="{{ route('create-project') }}" class="btn btn-primary mb-3">Create Project</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->project_code }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
