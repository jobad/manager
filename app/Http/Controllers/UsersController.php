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

	public function userAdd() {
		return view('users.add');
	}
}
