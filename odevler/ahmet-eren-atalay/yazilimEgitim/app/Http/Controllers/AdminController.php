<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('layouts.admin');
    }

    public function viewProfile()
    {
        $user = Auth::user();
        return view('admin.view_profile', compact('user'));
    }

    public function viewProfileUpdate(ProfileUpdateRequest $request)
    {
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;

        $userID = Auth::id();

        $duplicateControl = User::where('email', '!=', auth()->user()->email)
            ->where('email', $email)
            ->first();
        if ($duplicateControl)
        {
            alert()->error('Uyarı', 'Daha önce girilen email adresi kullanılmış')->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('admin.viewProfile');
        }

        $user = User::find($userID);
        $user->name = $name;
        $user->email = $email;
        if ($password)
        {
            $user->password = bcrypt($password);
        }
        $user->save();

        alert()->success('Uyarı', 'Bilgileriniz güncellendi')->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('admin.viewProfile');
    }
}
