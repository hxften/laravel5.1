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


//为多个http方法注册路由
Route::match(['get', 'post'], 'match', function()
{
    return 'Hello match';
});
//路由 - 响应所有http方法 http://dev.learn5.com/any
Route::any('any', function()
{
     echo url('any').'<br>';  //http://dev.learn5.com/any
     echo asset('img/photo.jpg').'<br>'; //http://dev.learn5.com/img/photo.jpg
     return 'Hello any'; //Hello any
});
//路由 - 可选择的路由参数及默认值
Route::get('username/{name?}', function($name = 'null')
{
    return "username $name";
});
//路由 -  路由参数的限制条件
Route::get('user/{id}', function($id)
{
    return "user $id.";
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function($id, $name)
{
    return "User $id";
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//路由 - 命名路由和路由跳转
////http://dev.learn5.com/user/profile
//profile
Route::get('user/profile', ['as' => 'profile', function()
{
    echo route('profile').'<br>';
    return 'profile';
}]);

//http://dev.learn5.com/user/profile
//profile
Route::get('redirect', function()
{
	return redirect()->route('profile');
});

//路由 - 路由群组
Route::group(['prefix' => 'admin'], function()
{
    Route::get('users', function()   //  "/admin/users"
    {
         return 'admin users';
    });

    Route::get('list', function()
    {
        return 'admin list';   //  "/admin/list"
    });
});

// 四脚猫控制器
Route::resource('photos', 'PhotosController');
// 隐式控制器
Route::controller('users', 'UsersController');



// 手册
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return 'Hello World';
});*/

Route::post('foo/bar', function () {
    return 'Hello World';
});

Route::put('foo/bar', function () {
    //
});

Route::delete('foo/bar', function () {
    //
});

//为多重动作注册路由
/*Route::match(['get', 'post'], '/', function () {
    return 'Hello World get post';
});*/

//通过 any 方法来使用注册路由并响应所有的 HTTP 动作
/*Route::any('foo', function () {
    return 'Hello World';
});*/

//路由参数
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'ID是：' . $postId .'.内容是：' . $commentId;
});

//正则表达式限制参数
Route::get('user/{name}', function ($name) {
    //
    return 'user：' .$name;
})
->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})
->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);