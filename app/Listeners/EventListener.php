<?php

namespace Horsefly\Listeners;

use Horsefly\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Contracts\Logging\log;
//use \log;

class EventListener
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(SomeEvent $event)
    {
        //
        echo '事件监听成功'.'<br>';
        \Log::debug("SomeEvent id {$event->id}");
    }
}
