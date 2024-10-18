<?php

header("Access-Control-Allow-METHODS: POST ");
header("Content-Type: application/json");

include "../config/config.php";
$config = new Config();


if($_SERVER['REQUEST_METHOD'] == "POST") {  

  
    $email = $data['username'];
    $password = $data['password'];

    $res = $config->singup( $username, $password);

    if($res) {

        $arr['data'] =("message Data Inserted Successfully");

    } else {
        $arr['data'] = ("Data Not Inserted");

    }
} else {

    $arr['data'] = ("Only Post Method Accepted");
    
}

echo json_encode($arr);
?>
