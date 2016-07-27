<?php

namespace Basic\Listeners;

use Basic\Events\UserCreateEvent;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmailListener implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;

    }

    /**
     * Handle the event.
     *
     * @param  UserCreateEvent  $event
     * @return void
     */
    public function handle(UserCreateEvent $event)
    {
        $message = sprintf('Hello, %s! Your account has been created successfully.', $event->user->name);
        $this->mailer->raw($message, function($m) use ($event){
           $m->from('carlos.clayton@gmail.com', 'Carlos Clayton');
           $m->to($event->user->email, $event->user->name);
        });
    }
}
