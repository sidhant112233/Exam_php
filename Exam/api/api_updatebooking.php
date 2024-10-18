<?php


header("Access-Control-Allow-METHODS: put ");
header("Content-Type: application/json");

include "../config/config.php";
$config = new Config();

if($_SERVER['REQUEST_METHOD'] == "put") {


    $first_person = $data['first_person'];
    $traveling_person = $data['traveling_person'];
    $starting_point = $data['starting_point'];
    $ending_point = $data['ending_point'];
    $price = $data['price'];


    $res = $config->updateData($first_person, $traveling_person, $starting_point, $ending_point, $price);


    if($res) {

        $arr['data'] =("message Data Inserted Successfully");
    }

    else {

        $arr['data'] = ("Data Not Inserted");
    }


} else {

    $arr['data'] = ("Only put Method Accepted");

}
echo json_encode($arr);


?>