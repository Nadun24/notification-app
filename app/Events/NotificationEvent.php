<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $name;
    protected $message;
    /**
     * Create a new event instance.
     */
    public function __construct($data)
    {
        $this->name = $data['name'] ?? 'Default Name';
        $this->message = $data['message'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('real-time-app'),
        ];
    }

    public function broadcastAs(): string
    {
        return 'notification.send';
    }

    public function broadcastWith(): array
    {
        return [
            'name' => $this->name,
            'message' => $this->message,
        ];
    }
}
