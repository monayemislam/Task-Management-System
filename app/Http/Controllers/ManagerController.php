<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/project/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation logic
        $request->validate([
            'project_code' => 'required|string|unique:projects,project_code',
            'project_name' => 'required|string',
        ]);

        // Create a new project
        Project::create([
            'project_code' => $request->input('project_code'),
            'project_name' => $request->input('project_name'),
        ]);

        return redirect()->route('all-projects')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userList(){
        $users = User::where('role','1')->get();
        return view('user.index',compact('users'));
        
    }

    public function createUser(){
        return view('user.create');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'employee_id' => 'required|unique:users,employee_id',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'employee_id' => $request->input('employee_id'),
            'password' => Hash::make($request->input('password')),
            'role'=>'1'
        ]);

        // return redirect()->route('userList')->with('success', 'Teammate created successfully.');
        return redirect()->back();
    }



}
