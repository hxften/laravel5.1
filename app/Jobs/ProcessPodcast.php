<?php

namespace Horsefly\Jobs;

use Horsefly\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

use log;

class ProcessPodcast extends Job implements SelfHandling
{

    //我们管理着一个播客发布服务，在发布之前需要处理上传播客文件
    protected $podcast;

     /**
     * 创建一个新的任务实例。
     *
     * @param  Podcast  $podcast
     * @return void
     */
    public function __construct($podcast)
    {
        //
        $this->podcast = $podcast;
    }

    /**
     * 运行任务。
     * 
     * @param  AudioProcessor  $processor
     * @return void
     */
    public function handle()
    {
        // 处理上传播客...
        \Log::info('process任务测试');
    }

    /**
     * 要处理的失败任务。
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $e)
    {
        // 给用户发送失败通知，等等...
    }
}
