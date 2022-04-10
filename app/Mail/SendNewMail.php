<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_contact)
    {
        $this->contact = $_contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $contact = $this->contact;
        // return $this->view('email.body', compact('contact'));
        return $this->from($this->contact['email'])->markdown('mails.contact')->with(['contact' => $this->contact]);        
    }
}
