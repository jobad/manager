<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function index() {

		if (!Session::get('isvalid')) {
			return redirect('login');
		} else {
			$user_details = Session::get('user_session');			
		}


		return view('dashboard.index', compact('user_details'));
	}

	/*public function user() {
		return view('dashboard.user');
	}*/
}
