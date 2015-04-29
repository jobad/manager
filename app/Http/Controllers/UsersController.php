<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {

	public function index()
	{
		//
	}

	public function userList() {
		return view('users.list');
	}

	public function userAdd(Request $request) {
		var_dump($request);
		return view('users.add');
	}

	public function userEdit() {
		return view('users.edit');
	}

	public function userDelete(){
		return true;
	}
}
