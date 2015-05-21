<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use App\Bazaarcornerapi\User;

class UserauthController extends Controller {

	public function index()
	{
		
	}

	public function showLogin() 
	{		
		return  view('login');
	}

	public function login(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');

		$user = new User();
		
		$validateUser = $user->bcLogin($username, $password);
		
		$validateUser = json_decode($validateUser);
		
		if (!empty($validateUser->success) && $validateUser->success == '1') {
			Session::set('user_session', $validateUser);
			Session::set('isvalid', true);
			
			return redirect('dashboard');
		} else {
			return false;
		}
	}
}