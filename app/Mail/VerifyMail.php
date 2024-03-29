<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $verify;

    /**
     * Create a new message instance.
     *
     * @return void 
     */
    public function __construct($user,$verify)
    {
        $this->user = $user;
        $this->verify = $verify;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.activation');
    }
}
