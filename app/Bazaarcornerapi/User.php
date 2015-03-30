<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;

class User {

   public function bcLogin($username, $password) {

        $bc_api = new ApiController();
        $login_data = array(
		     'username' => 'badjo',
		     'password' => '123456'
		);
		
		$new_user_details = array(
             'role_id'    => '1'
            ,'user_group_id'    => '1'
            ,'username'         => 'badjo'
            ,'password'         => '123456'
            ,'password_confirmation' => '123456'
            ,'email'            => 'joebenick@gmail.com'
            ,'first_name'       => 'Badjo'
            ,'last_name'        => 'Badiola'
            ,'address'			=> ''
            ,'country_id'		=> ''
            ,'phone'            => '09291614935'
            ,'birthdate'         => '1983-08-01'            
            ,'facebook'         => 'https://www.facebook.com/jobad'
            ,'twitter'          => 'https://twitter.com/jobad'
            ,'profile_image'    => ''
            ,'remember_token'   => ''            
    	);
		//var_dump($bc_api->request('POST','/user',$new_user_details)); exit;
        var_dump( $bc_api->request('POST','/login',$login_data));    exit;
        return $order;
    }

}