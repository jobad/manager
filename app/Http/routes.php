<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('login', 'UserauthController@showLogin');
Route::post('login', 'UserauthController@login');

Route::get('logout', 'UserauthController@logout');

Route::get('/', 'DashboardController@index');
Route::get('dashboard', 'DashboardController@index');

Route::get('user-list', 'UsersController@userList');
Route::get('user-add', 'UsersController@userAdd');
Route::post('user-add', 'UsersController@userInsert');
/*Route::get('user-view', 'UsersController@userView');
Route::get('user-edit', 'UsersController@userEdit');*/
Route::get('user-delete/id/{id}', 'UsersController@userDelete');
Route::get('user-viewedit/id/{id}/page/{page}', 'UsersController@userViewEdit');
Route::post('perform-update/id/{id}/page/{page}', 'UsersController@performUpdate');

Route::get('merchant-list', 'UsersController@merchantList');

Route::get('order-search', 'OrdersController@searchOrder');
Route::post('order-search', 'OrdersController@searchResult');

Route::get('top-brands', 'OrdersController@topBrands');
Route::get('most-bought', 'OrdersController@mostBought');


