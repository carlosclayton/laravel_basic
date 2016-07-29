<?php

namespace Basic\Jobs;

use Basic\Jobs\Job;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeMail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $message = sprintf('Hello %s!, wellcome.', $this->user->name);
        $mailer->raw($message, function($m) as ($user){
            $m->from('carlos.clayton@gmail.com', 'Carlos Clayton');
            $m->to($user->mail, $user->name);
        });
    }
}
