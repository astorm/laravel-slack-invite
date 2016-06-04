<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvite extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    protected function getEmail()
    {
        return $this->email;
    }
    
    protected function getToken()
    {
        return config('pulsestorm.slack.token');
    }
    
    protected function getUrlEndpoint()
    {
        return config('pulsestorm.slack.api_endpoint');
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fields = [
            'email'      => $this->email,            
            'token'      => $this->getToken(),
            'set_active' => 'true'
        ];
        
        $url        = $this->getUrlEndpoint();
        
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);        
    }
}
