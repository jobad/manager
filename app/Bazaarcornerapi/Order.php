<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;

class Order {

    public function search($string) {
        $bc_api = new Apicontroller();

        $result_search = $bc_api->request('POST', '/searchorder', $userid);        

        return $result_search;
    }
}
