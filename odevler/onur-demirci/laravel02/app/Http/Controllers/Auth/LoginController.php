<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check())
        {
            return redirect()->route('admin.index');
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        !is_null($remember) ? $remember = true : $remember = false;


        $user = User::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password))
        {
            Auth::login($user, $remember);

            return redirect()->route('admin.index');
        }
        else
        {
            alert()->error('Uyarı', 'Kullanıcı adı veya şifreniz yanlış.')->showConfirmButton('Tamam', '#3085d6');

            return redirect()->route('login');
        }


    }

    public function logout()
    {

        Auth::logout();

        return redirect()->route('login');
    }
}
