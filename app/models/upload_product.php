<?php 

Class Upload_product{

    function upload($POST,$FILES){

        $DB = new Database();
        $_SESSION['error'] = "";
        $allowed[] = 'image/png';

        if(isset($POST['title']) && isset($FILES['file']))
		{

            // upload file
            if ($FILES['file']['name'] != "" && $_FILES['file']['error'] == 0 && in_array($FILES['file']['type'],$allowed)) {
                $folder = "uploads/";
                if (!file_exists($folder)) {
                    mkdir($folder,0777,true);
                }
                $destination = $folder . $FILES['file']['name'];

                move_uploaded_file($FILES['file']['tmp_name'], $destination);
            }else {
                $_SESSION['error'] = 'This file could not be uploaded';

            }

            if ($_SESSION['error'] == "") {
                // ----
                $arr['title'] = $POST['title'];
                $arr['price'] = $POST['price'];
                $arr['image'] = $destination;
                $arr['url_address'] = generateRandomString(60); // get_random_string_max(60)
                $arr['date'] = date("Y-m-d H:i:s");

                $query = "insert into products (title,price,url_address,date,image) values (:title,:price,:url_address,:date,:image)";
                $data = $DB->write($query,$arr);
                if($data)
                {
                    
                    header("Location:". ROOT . "arrival");
                    die;
                }
            }
		}
    }

}
?>