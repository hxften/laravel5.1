<?php

namespace Horsefly\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * 启动任意应用程序的服务。
     * @return void
     */
    public function boot()
    {
        //想注册一个当队列任务失败时会被调用的事件. 事件附加一个回调函数
        /*Queue::failing(function (JobFailed $event) {
            // $event->connectionName
            // $event->job
            // $event->exception
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
