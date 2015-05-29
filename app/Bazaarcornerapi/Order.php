<?php namespace App\Bazaarcornerapi;

use App\Bazaarcornerapi\Apicontroller;

class Order {

    public function search($string) {
        /*$bc_api = new Apicontroller();

        $result_search = $bc_api->request('POST', '/searchorder', $search);*/        

        $result_search = json_decode('{"success":true,"order_id":1,"data":{"date":"01-31-1970","items":[{"item_name":"item name 1","sku":"SKU1234","brand":"brand name1","description":"this is the description of item name 1","list_price":"1","qty":"1"},{"item_name":"item name 2","sku":"SKU4567","brand":"brand name 2","description":"this is the description of item name 2","list_price":"1","qty":"1"},{"item_name":"item name 3","sku":"SKU7890","brand":"brand name 4","description":"this is the description of item name 3","list_price":"1","qty":"1"}]},"tax":1,"shipping":1,"discount":1,"total_total":1}
');

        return $result_search;
    }

    public function mostBought() {
    	$result = json_decode('{"success":true,"data":{"items":{"item0":10,"item1":8,"item2":7,"item3":6,"item4":5,"item5":4,"item6":3,"item7":2,"item8":1,"item9":0}}}
');

    	return $result;
    }

    public function topBrands() {
    	$result = json_decode('{"success":true,"data":{"brands":{"brandname0":100,"brandname1":90,"brandname2":80,"brandname3":70,"brandname4":60,"brandname5":50,"brandname6":40,"brandname7":40,"brandname8":30,"brandname9":20}}}
');
    	return $result;
    }
}
