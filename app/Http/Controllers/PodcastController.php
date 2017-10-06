<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;

use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;
use Carbon\Carbon;
use Horsefly\Jobs\ProcessPodcast;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 我们管理着一个播客发布服务，在发布之前需要处理上传播客文件
     * 保存播客
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // 创建播客...
        //dispatch 分发任务
        $podcast = '博客';
        $this->dispatch(new ProcessPodcast($podcast));
        echo $podcast.':分发任务执行成功';
        
        // 延迟10分钟执行 队列服务最大延迟 15 分钟
       /* $job = (new ProcessPodcast($podcast))
                    ->delay(Carbon::now()->addMinutes(10));
        $this->dispatch($job);
        echo $podcast.':分发任务延迟10分钟执行成功';*/

        //分发任务到指定队列
        //$job = (new ProcessPodcast($podcast))->onQueue('processing');

        //分发任务到指定连接
        //$job = (new ProcessPodcast($podcast))->onConnection('sqs');

        //调用 onConnection 和 onQueue 来同时指定任务的连接和队列
        /*$job = (new ProcessPodcast($podcast))
                ->onConnection('sqs')
                ->onQueue('processing');

        $this->dispatch($job);*/
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
