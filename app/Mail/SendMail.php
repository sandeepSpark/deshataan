<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //if request

        if($this->data['message']);{

        
            //from method for sending email
            //subject method for subject of email
            //view method for loaction of template email
            //with method for return value with data
            return $this->from($this->data['email'])->subject('Feedback')->view('sendMail')->with('data',$this->data);
        }
    }
}
