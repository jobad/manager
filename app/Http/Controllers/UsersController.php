<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use App\Bazaarcornerapi\User;

class UsersController extends Controller {

	public function index()
	{
		//
	}

	public function userList() {
		$user = new User();
		$result = $user->getAllUser();
		$users = $result->data;

		return view('users.list', compact('users'));
	}

	public function userAdd() {

		return view('users.add');
	}

	public function userInsert(Request $request) {
		$data['user_group_id'] = 3;
		$data['first_name'] = $request->input('first_name');
		$data['last_name'] = $request->input('last_name');
		$data['username'] = $request->input('username');
		$data['password'] = $request->input('password');
		$data['password_confirmation'] = $request->input('password_confirm');
		$data['email'] = $request->input('email');

		$user = new User();

		$create_user = $user->bcCreateAccount($data);

		return $create_user;

	}

	public function createAccount() {
		
	}

	public function userEdit() {
		return view('users.edit');
	}

	public function userDelete(){
		return true;
	}
}
