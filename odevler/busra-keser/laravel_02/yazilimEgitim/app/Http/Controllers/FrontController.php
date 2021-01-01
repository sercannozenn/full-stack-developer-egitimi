<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function message(Request $request)
    {

        $email = 'admin@admin.com';
        $messageInfo = [
            'name' => $request->name,
            'mail' => $request->mail,
            'website' => $request->website,
            'subject' => $request->subject,
            'comment' =>$request->comment
        ];
//        dd(gettype($messageInfo));
        $mail= new MessageMail($messageInfo);
        Mail::to($email)->send($mail);

//        dd('Mail Gönderildi');
        alert()->success('Başarılı', 'Mesajınız iletilmiştr.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('contact');

    }

}
