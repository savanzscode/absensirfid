<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure this model is created
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // Display a listing of the users (admins)
    public function index()
    {
        $data = User::all(); // Fetch all users
        return view('admin.index', compact('data')); // Pass the data to the view
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin.create'); // Return the create view
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(); // Redirect back with errors
        }

        // Create new user (admin)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.'); // Redirect with success message
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $admin = User::findOrFail($id); // Fetch user by ID
        return view('admin.edit', compact('admin')); // Return the edit view with user data
    }

    // Update the specified user in the database
    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id, // Ignore current email
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(); // Redirect back with errors
        }

        // Update existing user
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        // If a password is provided, hash it and update
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }

        $admin->save(); // Save changes

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.'); // Redirect with success message
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $admin = User::findOrFail($id); // Find user by ID
        $admin->delete(); // Delete user

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.'); // Redirect with success message
    }
}
