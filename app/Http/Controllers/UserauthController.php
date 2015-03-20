<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserauthController extends Controller {

	public function index()
	{
		
	}

	public function login() 
	{
		return  view('login');
	}
}
