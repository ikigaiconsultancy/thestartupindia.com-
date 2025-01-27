<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\RegisterEmailSend;
use App\Mail\SendEmailTest;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
     
    protected $data;
   // private $data = null;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    { 
        $this->data = $data; 

    }

    /**
     * Execute the job.
     *
     * @return void
     */
     public function handle()
    {
        $email = new RegisterEmailSend($this->data);
        Mail::to($this->data['email'])->send($email); 
    }
}
