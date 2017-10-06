<?php

namespace Horsefly\Jobs;

use Horsefly\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use log;

class SendCms extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    //protected $msg;
    protected $number;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($number)
    {
        //
        //$this->msg = $msg;
        $this->number = $number;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //app('cms')->send($this->msg);
        //\Cms::send($this->msg);
        \Log::info('This is an sms sent to ' . $this->number);
    }
}
