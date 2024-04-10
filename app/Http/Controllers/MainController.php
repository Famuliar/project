<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create()
    {
        return view('create');
    }

    public function createnew()
    {
        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'middle_name' => 'string',
            'birth_date' => 'date',
            'email' => 'string',
            'password' => 'string',
        ]);
        User::create($data);
        return redirect() ->route('users.index');
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'middle_name' => 'string',
            'birth_date' => 'date',
            'email' => 'string',
            'password' => 'string',
        ]);
        $user->update($data);
        return redirect() ->route('users.index', $user->id);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
