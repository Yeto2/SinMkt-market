<?php

class Features extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Features";

        $this-> view("forniture/features" , $data);
    }
}

?>