<?php

class Upload extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Upload | Furniture";

        $this-> view("forniture/upload" , $data);
    }

    function Product(){
    
    $data["page_tittle"] = "Upload | Furniture";

    $this-> view("forniture/upload" , $data);
}

}
?>