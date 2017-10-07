<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;

use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;
use Horsefly\Jobs\CreateMessage;  
use Horsefly\Jobs\SendUserEmail;

use Horsefly\Jobs\SendCms;
use Horsefly\Events\SomeEvent;
use Horsefly\Jobs\Job;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 服务 
        //$cms = 'cms22';
        //\Cms::send("hello cms");  // 关键行

        //队列
        $title = 'title';
        //\Queue::push(new SendCms($title));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 这个方法我们用来模拟发送消息队列.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 吕倡 异步队列测试
        $datas = \DB::table('user')->where('status',1)->get();
        foreach($datas as $data){
            // 会自动执行
            $job = (new SendUserEmail($data->name,$data->email));

            // 这个任务将被分发到默认队列...
            //$this->dispatch($job);

            //$job = (new SendUserEmail($data->name,$data->email))->onQueue('email');
            // 这个任务将被发送到「email」队列...
            $this->dispatch($job->onQueue('email'));
        }
        return 'SendEmail';
        //return redirect('/user');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //http://dev.laravel51.com/user/10/edit
        //删除方法触发事件
        $id = 1;
        event(new SomeEvent($id)); // 关键行

        return 'edit事件';
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

    }
}
