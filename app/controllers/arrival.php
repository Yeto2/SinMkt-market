<?php

class Arrival extends Controller{
    
    function index(){

        $data["page_tittle"] = "New Arrivals | Furniture";
                
        $products = $this->loadModel('product');
        $result = $products->get_all();

        $data["product"] = $result;
        $this-> view("forniture/arrival" , $data);
    }

}

?>