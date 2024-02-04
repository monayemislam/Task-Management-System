@extends('layouts.app')

@section('content')


<div class="container">
        <h2>Create Project</h2>
        
        <a href="{{ route('all-projects') }}" class="btn btn-primary mb-3" >all-projects</a>
        <form action="{{ route('store-project') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="project_code" class="form-label">Project Code:</label>
                <input type="text" name="project_code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name:</label>
                <input type="text" name="project_name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>

@endsection