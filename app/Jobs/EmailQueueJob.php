<?php
  
namespace App\Jobs;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendEmailQueued;
use Illuminate\Support\Facades\Mail;
use App\Models\Template;

class EmailQueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  
    protected $details;
  
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
  
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (isset($this->details['template'])) {
            $template = Template::where('name', $this->details['template'])->first();
            $body = $template->body;

            if ( isset($this->details['title'])) $body =str_replace("{{titolo}}", $this->details['title'] , $body);
            if ( isset($this->details['email'])) $body =str_replace("{{email}}", $this->details['email'] , $body);
            if ( isset($this->details['body'])) $body =str_replace("{{body}}", $this->details['body'] , $body);
            $body =str_replace("{{appname}}", config('app.name', '') , $body);
            $body =str_replace("{{appurl}}", config('app.url', '') , $body);
            $body =str_replace("{{userprofile}}", "profile" , $body);


            $this->details['body'] = $body;
        }


        $email = new SendEmailQueued($this->details);      
        Mail::to($this->details['email'])->send($email);

    }
}