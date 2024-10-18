<?php


header("Access-Control-Allow-METHODS: POST ");
header("Content-Type: application/json");

include "../config/config.php";
$config = new Config();

if($_SERVER['REQUEST_METHOD'] == "POST") {


    $id = $data['id'];


    $res = $config->ftchsingleData($id);

    $result = mysqli_fetch_assoc($res);

    if($result) {
    
        $arr['data'] = $result;
    }

    else {

        $arr['data'] = ("Data Not Found");
    }
}
else{
    $arr['dataa'] = "Only Post Method Accepted";
}

echo json_encode($arr);


?>