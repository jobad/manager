<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;

class User {

   public function bcLogin($username, $password) {

        $bc_api = new ApiController();
        $login_data = array(
		     'username' => $username,
		     'password' => $password
		);
		
        $result = $bc_api->request('POST','/login',$login_data);

        return $result;
    }

    public function bcCreateAccount($arr_info) {

        $bc_api = new ApiController();
var_dump($arr_info);
        $create_user = $bc_api->request('POST','/user', $arr_info);
var_dump($create_user);
        if ($create_user) {
            return true;
        } else {
            return false;
        }
    }

    public function bcEditAccount($arr_info) {
        $bc_api = new Apicontroller();

        $update_user = $bc_api->request('POST', '/user-update', $arr_info);
    }

    public function bcDeleteAccount($id) {
        $bc_api = new Apicontroller();

        $update_user = $bc_api->request('POST', '/user-delete', $id);
    }
}