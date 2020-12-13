<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {


        $name = $request->name;
        $email = $request->email;
        $password = $request->password;


        $user = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => Hash::make($password)
        ]);

        Auth::login($user);
        return redirect()->route('admin.index');
    }
}
