<?php
namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;


use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;

class UserController extends Controller
{
	
	/**
	 * User Repository 的实现。
	 *
	 * @var UserRepository
	 */
	protected $users;
	
	/**
	 * 创建新的控制器实例。
	 *
	 * @param  UserRepository  $users
	 * @return void
	 */
	public function __construct(UserRepository $users)
	{
		$this->users = $users;
	}
	
	
	/**
	 *在应用用户中查询出已激活的用户列表。
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'aaaaaaaaa';exit;
		//$users = DB::select('select * from users where id = ?', [1]);

	/*array(1) { 
 		* [0]=> object(stdClass)#172 (7) { 
 		* ["id"]=> int(1) ["name"]=> string(3) "Ten" 
		* ["email"]=> string(17) "1360920478@qq.com" 
		* ["password"]=> string(60) "$2y$10$uFbkIddcXlLd4E.VchXwZ.svSx3VMLmNIi.d/KnagGGqwlEi71ArK" 
		* ["remember_token"]=> string(60) "tKRClQgYSXOwXuFiJlx1CnHaSHVCMElOBC4thQZkCy7egVeyyh8euDpmY34F" 
		* ["created_at"]=> string(19) "2016-12-04 13:43:26" 
		* ["updated_at"]=> string(19) "2016-12-04 13:44:10" } }*/
		//select 方法以数组的形式返回结果集，数组中的每一个结果都是一个PHP StdClass 对象
		/*foreach ($users as $user) {
			echo $user->name;
		}*/
		
		// true
		$users = DB::insert('insert into users (id, name) values (?, ?)', [2, 'Dayle']);
		
		//int(1)
		//$affected = DB::update("update users set email = '1326138@163.com' where name = ?", ['Dayle']);
		
		//int(1)
		//$deleted = DB::delete('delete from users where id = 2');
		var_Dump($deleted);
		//return view('user', ['users' => $users]);
	}
	
	/**
	 * 显示指定用户的详细信息。
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		echo '33';exit;
		$user = $this->users->find($id);
		echo '<pre>';
		var_Dump($user);
		//return view('user.profile', ['user' => $user]);
	}
	
	/**
     * 显示指定用户的个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
    	echo 'aa';
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
	

}

