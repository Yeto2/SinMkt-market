<?php

class Arrival extends Controller{
    
    function index(){

        $data["page_tittle"] = "New Arrivals";
        $this-> view("forniture/arrival" , $data);
    }

}

?>