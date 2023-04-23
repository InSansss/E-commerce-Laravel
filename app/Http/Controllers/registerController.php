<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required | min:5",
            "username" => "required |unique:users| min:5",
            "email" => "required | email: dns |unique:users",
            "password" => "required |min:5"
        ]);

        $validation["password"] = bcrypt($validation["password"]);

        User::create($validation);

        return redirect('/login')->with('success','Registration complete');
    }
}


