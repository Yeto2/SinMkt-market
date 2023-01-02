<?php

class Home extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Home | Furniture";
        $this-> view("forniture/index" , $data);
    }
}

?>