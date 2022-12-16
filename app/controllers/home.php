<?php

class Home extends Controller{
    
    function index(){

        $image_class = $this->loadModel('image_class');
        $this-> view("home");
    }
}

?>