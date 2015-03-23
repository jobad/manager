<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Bazaarcornerapi\User;

class UserauthController extends Controller {

	public function index()
	{
		
	}

	public function login() 
	{
		$test = new User();

		var_dump($test->bcLogin('1', '2'));
		return  view('login');
	}
}
