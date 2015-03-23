<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;

class User {

   public function bcLogin($username, $password) {

        $bc_api = new ApiController();
        $login_data = array(
		     'username' => 'badjo',
		     'password' => '123456'
		);
        var_dump( $bc_api->request('POST','/login',$login_data));    
        return $order;
    }

}