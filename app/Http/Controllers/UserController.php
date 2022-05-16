<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.users', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5'],
            'age' => ['required', 'gte:0']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age
        ]);

        return redirect('/users')->with('success', 'User has been added');
    }

    public function edit(User $user)
    {
        $userDetails = User::findOrFail($user->id);

        return view('users.edit', ['user' => $userDetails]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'password' => ['required', 'min:5'],
            'age' => ['required', 'gte:0']
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age
        ]);

        return redirect('/users')->with('success', 'User has been updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'User has been deleted');
    }
}
