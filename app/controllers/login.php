<?php

class Login extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Login | Furniture";

        $this-> view("forniture/login" , $data);
    }
}

?>