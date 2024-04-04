<?php

namespace App\Listeners;

use App\Events\CreatedPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Broadcast;

class UpdatePost
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreatedPost $event): void
    {
      // Emitir el evento a todos los clientes conectados al canal 'post'
    //   Broadcast::to('post')->emit('post.created', [
    //     'postId' => $event->postId,
    // ]);
    }
}
