<?php

class Home extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Home | Furniture";

        $this-> view("forniture/index" , $data);
    }
}

?>


<!----- to run image corp class ----->

        <!-- $image_class = $this->loadModel('image_class'); -->
        
<!-------- to display data from database ---->

    <!-- $DB = new Database();
         show($DB->read("select * from images")); -->