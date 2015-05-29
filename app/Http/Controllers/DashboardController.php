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
			$stduser_details = Session::get('user_session');
			$user_details = $stduser_details->data;

			if ($user_details || $user_details != NULL) {
				return view('dashboard.index', compact('user_details'));			
			} else {
				return redirect('login');
			}			
		}
		
	}

	/*public function user() {
		return view('dashboard.user');
	}*/
}
