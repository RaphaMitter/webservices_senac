<?php

header("content-type: Application/json");

$msg = array(
    "msg" => "API v1.0 Senac Lapa Tito" , 
    "Modelo" => "4.0");
echo json_encode($msg);


?>