<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//四脚猫隐式控制器
class UsersController extends Controller {

	/**
     * 响应/users的GET请求
     */
    public function getIndex(Request $req)
    {
    	return 'getindex';exit;
        $input = $req->all();
        $title = $req->input('title');	
        return print_r($input, true);
    }


    /**
     * 响应/users/show-name/1的GET请求
     */
    public function getShowName($id)
    {
        return "show user id $id";
    }

	 /**
	 * 响应/users/admin-profile的GET请求
	 */
    public function getAdminProfile()
    {
        return 'getAdminProfile';
    }

    /**
     * 响应/users/hello的GET请求
     */
    public function getHello()
    {
        $name = 'Jim';
        return view('hello', compact('name'));
    }

}
