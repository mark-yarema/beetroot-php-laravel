<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('users.index', [
            'users' => $users]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('Home');
    }


    public function edit(User $user)
    {
        return view('users/edit');


    }

    public function update(User $user, Request $request)
    {

        $user->name = $request->get('name');


        $user->save();

        return redirect()->route('users.update', ['id' => $user->id]);

    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');

    }
}

