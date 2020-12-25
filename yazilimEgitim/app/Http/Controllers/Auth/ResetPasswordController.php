<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        if ($user)
        {
            $user->reset_password_token = Str::random(40);
            $user->reset_password_expired = now()->addMinutes(120);
            $user->save();

            $mail = new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);
        }

        alert()->success('Başarılı', 'Şifre Sıfırlama Mailini gönderilmiştir.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('reset.password');
    }

    public function resetPasswordShowForm(Request $request)
    {
        $token = $request->token;
        if ($token)
        {
            $user = User::where('reset_password_token', $token)->first();
            if ($user)
            {
                return view('auth.reset_password');
            }
        }

        alert()->error('Uyarı', 'Belirtilen token a ait kullanıcı bulunamadı.')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('reset.password');
    }

    public function resetPassword(Request $request)
    {
        $email = $request->email;
        $token = $request->token;
        $password = $request->password;

        $user = User::where('email', $email)
            ->where('reset_password_token', $token)
            ->where('reset_password_expired', '>', now())
            ->first();


        if ($user)
        {
            $user->password = bcrypt($password);
            $user->reset_password_token = null;
            $user->reset_password_expired = null;
            $user->save();
            Auth::login($user);

            alert()->success('Başarılı', 'Şifreniz belirlenmiştir.')
                ->showConfirmButton('Tamam', '#3085d6');

            return redirect()->route('admin.index');
        }


        alert()->error('Uyarı', 'Belirtilen süre içerisinde şifrenizi sıfırlamadınız.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->back();


    }
}
