<?php

class About extends Controller{
    
    function index(){

        $data["page_tittle"] = "About Us";
        $this-> view("forniture/about" , $data);
    }

}

?>