

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User List</h2>

    <a href="{{ route('create-user') }}" class="btn btn-primary mb-3">Create User</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Employee ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->employee_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
