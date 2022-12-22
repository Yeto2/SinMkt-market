<?php

class About extends Controller{
    
    function index(){

        $data["page_tittle"] = "About Us | Furniture";
        $this-> view("forniture/about" , $data);
    }

}

?>