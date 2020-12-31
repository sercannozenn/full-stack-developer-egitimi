<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class ResetPasswordController extends Controller
{
    public function showForm()
    {
        return view('auth.reset_password');

    }

    public function reset(Request $request)
    {

        $email = $request->email;


        $user = User::where('email', $email)->first();
//        dd($user);

        if ($user)
        {
            $user->reset_password_token = \Illuminate\Support\Str::random(40);
            $user->reset_password_expired = now()->addMinutes(120);
            $user->save();

            $mail = new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);

        }
        alert()->success('Başarılı', 'Şifre sıfırlama mailiniz gönderilmiştir.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('reset.password');

    }

    public function resetPasswordShowForm(Request $request)
    {
        if (isset($request->token))
        {
            $token = $request->token;
            return view('auth.reset_password', compact('token'));
        }
        return view('front.index');
    }

    public function resetPassword(Request $request)
    {

        $email = $request->email;
        $token = $request->token;
        $password = $request->password;

        $user=User::where('email', $email)
            ->where('reset_password_token', $token)
            ->where('reset_password_expired', '>', now())
            ->first();

        if ($user)
        {
            $user->password=bcrypt($password);
            $user->save();

            Auth::login($user);

            alert()->success('Başarılı', 'Şifreniz belirlenmiştir.')
                ->showConfirmButton('Tamam', '#3085d6');

            return redirect()->route('admin.index');
        }

        alert()->success('Uyarı', 'Şifre sıfırlama işlemi zaman aşımına uğradı.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->back();

    }
}
