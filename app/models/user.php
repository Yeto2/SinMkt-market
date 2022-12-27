<?php

class User {

    function login($POST)
    {
        $DB = new Database();
if (isset($POST['username']) && isset($POST['password'])) {
    
        $arr['username'] = $POST['username'];
        $arr['password'] = $POST['password'];

        $query = "select * from users where username = :username && password = :password limit 1";
        $data = $DB->read($query,$arr);

        if (is_array($data)) {
            # logged in
            $_SESSION['user_id'] = $data[0]->userid ;
            $_SESSION['user_name'] = $data[0]->username ;
        } else {
            $_SESSION['error'] = "Wrong user or password";

        }
        
}else {
    $_SESSION['error'] = "please enter a valid user or password";
}



    }
    function signup($POST)
    {
        # code...
    }

    function check login()
    {
        if (isset($_SESSION['user_url'])) {

            $arr['user_url'] = $_SESSION['user_url'];

        $query = "select * from users where username = :username && password = :password limit 1";
        $data = $DB->read($query,$arr);

        if (is_array($data)) {
            # logged in
            $_SESSION['user_id'] = $data[0]->userid ;
            $_SESSION['user_name'] = $data[0]->username ;
            $_SESSION['user_url'] = $data[0]->url_adress ;
            return true;
        }
            return false;
        }
    }
}


?>