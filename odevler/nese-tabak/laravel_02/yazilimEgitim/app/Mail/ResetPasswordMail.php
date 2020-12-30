<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $user=$this->user;
        return $this->view('mail.reset_password_mail',compact('user'));
    }
}
