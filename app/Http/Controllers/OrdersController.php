<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;
use App\Bazaarcornerapi\User;
use App\Bazaarcornerapi\Order;

class OrdersController extends Controller {

	function searchOrder () {
		$user = new User();
		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			return view('orders.search', compact('user_details'));
		} else {
			return redirect('login');
		}

		
	}

	function searchResult (Request $request) {
		$searchterm = $request->input('search_order');

		$user = new User();
		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			$order = new Order();
			$search_result = $order->search($searchterm);

			return view('orders.searchresult', compact('search_result', 'user_details'));
		} else {
			return redirect('login');
		}
		
	}

	function mostBought () {
		$user = new User();
		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			$order = new Order();
			$most_bought = $order->mostBought();

			return view('orders.mostbought', compact('most_bought', 'user_details'));
		} else {
			return redirect('login');
		}
		
	}

	function topBrands () {
		$user = new User();
		$user_details = $user->userSession('user_session');

		if ($user_details || $user_details != NULL) {
			$order = new Order();
			$top_brands = $order->topBrands();
			
			return view('orders.topbrands', compact('top_brands', 'user_details'));	
		} else {
			return redirect('login');
		}
		
	}
}