<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;

use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;

class UsersController extends Controller
{


	/**
     * 响应/users的GET请求
     */
    public function getIndex(Request $req)
    {
    	//return 'getindex';exit;
        $input = $req->all();
        $title = $req->input('name');	
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
