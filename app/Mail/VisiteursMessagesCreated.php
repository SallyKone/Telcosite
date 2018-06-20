<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VisiteursMessagesCreated extends Mailable
{
    use Queueable, SerializesModels;

     public $nom;
     public $email;
     public $phone;
     public $msg;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $email, $phone, $msg)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->phone = $phone;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
