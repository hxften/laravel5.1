<?php

namespace Horsefly\Jobs;

use Horsefly\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

use log;

class SendUserEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $name;
    protected $email;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name , $email)
    {
        //
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Execute the job.
     * http://dev.laravel51.com/user/2    GET show方法
     * 
     * @return void
     */
    public function handle()
    {
        //\Log::info($this->name.'邮件发送成功');exit;
        // 如果参试大于三次
        if ($this->attempts() > 3) {
            \Log::info($this->name.'邮件参试失败过多');
        }else{
            // 每次进来休息3秒钟
            sleep(3);
            // 休息10秒钟
            //$this->release(10);
            $url = 'http://www.ydma.cn';
            $title = '测试邮件';
            $to = $this->email;

            \Log::info($this->name.'邮件准备发送');
            // 邮件发送
            /*$flag = \Mail::send('email.test', ['name' => $this->name, 'url' => $url], function ($message) use ($to, $title) {
                // 发送
                $message->to($to)->subject('【亲爱的程序猿】' . $title);
            });

            echo date('Y-m-d H:i:s')."\n".$to.'的邮件已发送...';

            if($flag){
                \Log::info($this->name.'邮件发送成功');
            }else{
                \Log::info($this->name.'邮件发送失败');
            }*/
        }
    }

    /**
     * 处理一个失败的任务
     *
     * @return void
     */
    public function failed()
    {

        \Log::error($this->name.'队列任务执行失败'."\n".date('Y-m-d H:i:s'));
    }
}
