<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Message;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\Array_;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public function __construct(Array $messageInfo)
    {

        $this->message=$messageInfo;

    }


    public function build()
    {
        $message=$this->message;
//        dd($message);

        return $this->view('mail.message')
            ->with([
                'name' => $message['name'],
                'mail' => $message['mail'],
                'website' => $message['website'],
                'subject' => $message['subject'],
                'comment' =>$message['comment']

            ]);
    }
}
