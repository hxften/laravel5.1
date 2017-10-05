<?php

namespace Horsefly\Listeners;

use Horsefly\Events\TenEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TenEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TenEvent  $event
     * @return void
     */
    public function handle(TenEvent $event)
    {
        //
    }
}
