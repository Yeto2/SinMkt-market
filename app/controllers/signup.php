<?php

class SignUp extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "SignUp | Furniture";

        $this-> view("forniture/signUp" , $data);
    }
}

?>