<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function showForm() {
        return view('auth.password_reset');
    }

    public function reset(Request $request)
    {
        $email = $request->email;

        $user = User::where('email',$email)->first();
        //dd($user);
        if ($user)
        {
            $user->reset_password_token = Str::Random(40);
            $user->reset_password_expire = now()->addMinutes(120);
            $user->save();

            $mail = new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);
            alert()->success('Başarılı', 'Şifre Sıfırlama mailiniz gönderilmiştir. Mailinizi kontrol ediniz.')
                ->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('login');
        }
        else
        {
            alert()->error('Hata', 'Kullanıcı bulunamadı')
                ->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('reset.password');
        }
    }

    public function resetPasswordShowForm(Request $request)
    {
        if (isset($request->token))
        {
            $token = $request->token;
            return view('auth.password_reset',compact('token'));
        }
        else
        {
            return view('front.index');
        }
    }

    public function resetPassword(Request $request)
    {
        $token = $request->token;
        $newPassword = $request->newPassword;
        $retype = $request->retype;

        if ($newPassword==$retype)
        {
            $user = User::where('reset_password_token',$token)
                ->where('reset_password_expire','>',now())
                ->first();
            
            if ($user)
            {
                $user->password = bcrypt($newPassword);
                $user->save();
                Auth::login($user);
                alert()->success('Başarılı', 'Yeni şifreniz kaydedilmiştir.')
                    ->showConfirmButton('Tamam', '#3085d6');
                return redirect()->route('admin.index');
            }
        }
       else
       {
           alert()->error('Hata', 'Girilen şifreler eşleşmiyor!')
               ->showConfirmButton('Tamam', '#3085d6');
           return redirect()->back();
       }


    }
}
