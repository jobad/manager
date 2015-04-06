<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

use App\Bazaarcornerapi\User;

class UserauthController extends Controller {

	public function index()
	{
		
	}

	public function showLogin() 
	{
		//$test = new User();

		//var_dump($test->bcLogin('1', '2'));
		return  view('login');
	}

	public function login(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');

		$user = new User();
		
		$validateUser = $user->bcLogin($username, $password);
		
		$validateUser = json_decode($validateUser);
		
		if (!empty($validateUser->success) && $validateUser->success == '1') {
			Session::put('isvalid', true);
			return true;
		} else {
			return false;
		}
	}
}