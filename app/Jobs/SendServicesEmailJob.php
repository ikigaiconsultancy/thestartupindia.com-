<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\ServicesRegisterEmailSend;
use Mail;

class SendServicesEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
     
    protected $data;

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
        $email = new ServicesRegisterEmailSend($this->data);
        Mail::to($this->data['email'])->send($email); 
    }
}
