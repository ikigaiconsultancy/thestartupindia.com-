<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendThankyouEmail extends Mailable
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
        'name' => 'Digital Signature Registration',
        ];

        return $this->from('noreply@digisignature.org', 'Digital Signature Registration')->subject('Thank You for Your Successful Payment on digisignature.org')->view('emails.thankyou_mail')->with($this->data);
    }
}
