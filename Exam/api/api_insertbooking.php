<?php


header("Access-Control-Allow-METHODS: POST ");
header("Content-Type: application/json");

include "../config/config.php";
$config = new Config();

if($_SERVER['REQUEST_METHOD'] == "POST") {


    $first_person = $data['first_person'];
    $traveling_person = $data['traveling_person'];
    $starting_point = $data['starting_point'];
    $ending_point = $data['ending_point'];
    $price = $data['price'];


    $res = $config->insertData($first_person, $traveling_person, $starting_point, $ending_point, $price);


    if($res) {

        $arr['data'] =("message Data Inserted Successfully");
    }

    else {

        $arr['data'] = ("Data Not Inserted");
    }


} else {

    $arr['data'] = ("Only Post Method Accepted");

}
echo json_encode($arr);


?>