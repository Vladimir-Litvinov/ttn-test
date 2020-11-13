<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', '!=', 'ADMIN')->orderBy('id', 'desc')->simplePaginate(10);
        return view('user.index', compact('user'));
    }

    public function create(User $user)
    {
        return view('user.create', compact($user));
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = Hash::make($request->code);
        $user->role = 'USER';
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->password = Hash::make($request->code);
        $user->update($request->all());
        return redirect()->route('user.index');
    }
}
