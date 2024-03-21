<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServicesRegisterEmailSend extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

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
        $from = [
        'address' => 'noreply@digisignature.org',
        'name' => 'Digital Signature Portal'
        ];

        return $this->from('noreply@digisignature.org', 'Digital Signature Portal')->subject('Your Digital Signature Registration is Pending')->view('emails.services_confirm_mail')->with($this->data);
    }
}
