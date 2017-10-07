<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 四脚猫控制器
Route::resource('photos', 'PhotosController');
// 隐式控制器
Route::controller('users', 'UsersController');

//test测试
Route::resource('/test', 'TestController');  
Route::resource('/test_blog', 'TestController@blog');
/*Route::get('/test', 'TestController');  
Route::post('/test', 'TestController');  
Route::get('/testEdit', 'TestController@edit');  
Route::post('/testUp', 'TestController@up');  
Route::controller('/addTest','TestController'); */ 


Route::resource('/user','UserController');  
//事件
Route::get('event', function()
{
    event(new SomeEvent(12)); // 关键行
    
});

//创建队列
Route::resource('/cms','CmsController@sendCms');  
//测试队列分发任务
Route::resource('/podcast','PodcastController@store'); 