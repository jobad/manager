<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;
use Session;

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

        $create_user = $bc_api->request('POST','/user', $arr_info);
        $create_user = json_decode($create_user);
        
        return $create_user;
    }

    public function bcEditAccount($arr_info) {
        $bc_api = new Apicontroller();

        $update_user = $bc_api->request('POST', '/user-update', $arr_info);

        return $update_user;
    }

    public function getUserDetails($userid) {        
        $bc_api = new Apicontroller();

        $result_userdetails = $bc_api->request('POST', '/userdetails', $userid);        
        
        return $result_userdetails;
    }

    public function bcUpdateUser($user_data) {
        $bc_api = new Apicontroller();

        $result_update = $bc_api->request('POST', '/update-record', $user_data);

        return $result_update;
    }

    public function getAllUser() {        
        $bc_api = new Apicontroller();

        $result_userlist = $bc_api->request('POST', '/user-list');        
        $userlist_decode = json_decode($result_userlist);
        
        return $userlist_decode;
    }

    public function bcDeleteAccount($id) {
        $bc_api = new Apicontroller();

        $delete_user = $bc_api->request('POST', '/user-delete', $id);
        
        return $delete_user;
    }

    public function userSession($session_name) {
        $stduser_details = Session::get($session_name);
        
        if (isset($stduser_details)) {
            $user_details = $stduser_details->data;
            return $user_details;
        } else {
            return false;
        }
    }

    public function getRoles() {
        $bc_api = new Apicontroller();

        $get_roles = $bc_api->request('POST', '/get-role');
        $get_roles = json_decode($get_roles);
        return $get_roles;
    }

    public function getMerchants() {
        $bc_api = new Apicontroller();

        $get_merchants = $bc_api->request('POST', '/show-merchants');

        return $get_merchants;
    }
}