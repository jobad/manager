<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

		var_dump($validateUser);

        return 'Friend added!';
	}
}