<?php

class Features extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Features | Furniture";

        $this-> view("forniture/features" , $data);
    }
}

?>