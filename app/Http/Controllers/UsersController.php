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
		/*$result = $user->getMerchants();
		print_r($result);
		exit;*/
		$result = $user->getAllUser();
		$users = $result->data;

		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			return view('users.list', compact('user_details', 'users'));
		} else {
			return redirect('login');
		}
	}

	public function userAdd() {
		$user = new User();
		$user_details = $user->userSession('user_session');

		$user_roles = $this->getRoles();

		$roles = array();
		foreach ($user_roles as $user_role) {
			$roles[$user_role->id] = $user_role->title;
		}

		if ($user_details || $user_details != NULL) {
			return view('users.add', compact('user_details', 'roles'));
		} else {
			return redirect('login');
		}
	}

	public function userInsert(Request $request) {

		$data['role_id'] = $request->input('role_id');
		$data['is_active'] = $request->input('is_active');
		$data['first_name'] = $request->input('first_name');
		$data['last_name'] = $request->input('last_name');
		$data['username'] = $request->input('username');
		$data['password'] = $request->input('password');
		$data['password_confirmation'] = $request->input('password_confirm');
		$data['birthdate'] = $request->input('birthdate');
		$data['email'] = $request->input('email');

		$user = new User();
		
		$create_user = $user->bcCreateAccount($data);

		if ($create_user) {
			return redirect('user-list');
		}
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

	public function getRoles() {
		$user = new User();		
		$result = $user->getRoles();
		
		$roles = $result->data;

		return $roles;
	}

	public function merchantList() {
		$user = new User();		
		$result = json_decode($user->getMerchants());
		
		$merchant_users = $result->data;

		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			return view('users.merchantlist', compact('user_details', 'merchant_users'));
		} else {
			return redirect('login');
		}
	}
}
