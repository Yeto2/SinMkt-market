<?php

class Upload extends Controller{
    
    function index(){
    
        header("Location:" . ROOT . "upload/product");
        die;
    }



    function product(){

        $user = $this->loadModel("user");
        if(!$result = $user->check_login()){
            header("Location:" . ROOT . "login");
            die;
        }
        if (isset($_POST['title']) && isset($_FILES['file'])) {
            $uploader = $this->loadModel("upload_product");
            $uploader->upload($_POST,$_FILES);
        }
        $data["page_tittle"] = "Upload | Furniture";
        $this-> view("forniture/upload" , $data);
    }

}
?>