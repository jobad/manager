<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrdersController extends Controller {

	function searchOrder () {
		return view('orders.search');
	}

}
