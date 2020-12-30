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
    public function showReset()
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
            $user->reset_password_expired = Carbon::now()->addMinutes('120');
            $user->save();

            $mail = new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);

        }
        else
        {
            alert()->error('Uyarı', 'Mail adresinizi kontrol ediniz')->showConfirmButton('Tamam', '#3085d6');

            return redirect()->route('reset.password');
        }

        alert()->success('Başarılı', 'Şifre Sıfırlama Mailiniz Gönderilmiştir.')->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('reset.password');

//        dd("Şifre Sıfırlama Mailiniz Gönderilmiştir.");
//        dd(Carbon::now()->addMinutes('120'));
    }

    public function resetPasswordShowReset(Request $request)
    {
        $token = $request->token;

        if (isset($token))
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



        $user = User::where('email', $email)
            ->where('reset_password_token', $token)
            ->where('reset_password_expired', '>', now())
            ->first();

        if ($email == '')
        {
            alert()->error('Uyarı', 'Mail adresinizi boş bırakmayınız')->showConfirmButton('Tamam', '#3085d6');

            return back();
        }
        elseif ($email=!$user)
        {
            alert()->error('Uyarı', 'Mail adresinizi kontrol ediniz')->showConfirmButton('Tamam', '#3085d6');

            return back();
        }
        elseif ($password == '')
        {
            alert()->error('Uyarı', 'Parolanızı boş bırakmayınız')->showConfirmButton('Tamam', '#3085d6');

            return back();
        }

        elseif($user)
        {
            $user->password = bcrypt($password);
            $user->save();


            Auth::login($user);

            alert()->success('Başarılı', 'Şifreniz Sıfırlanmıştır.')->showConfirmButton('Tamam', '#3085d6');

            return redirect()->route('admin.index');
        }


    }

}
