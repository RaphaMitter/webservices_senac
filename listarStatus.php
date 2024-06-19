<?php

include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->listarStatus();

if($resultado){
$msg = array("status" => $resultado);
echo json_encode($msg);

} else {
    $msg = array("erro" => "Erro ao consultar os dados");
    echo json_encode($msg);
}



?>