<?php

namespace Basic\Events;

use Basic\Events\Event;
use Basic\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $message;
    protected $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message, User $user)
    {
        $this->message = $message;
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['user.' . $this->user->id];
    }
}
