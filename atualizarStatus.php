<?php

include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$data = json_decode(file_get_contents("php://input"), true);
$nome_status = $data["nome_status"];
$id_status = $data["id_status"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->atualizarStatus($nome_status, $id_status);

if($resultado){
    $msg = array("msg" => "Atualização do Status realizado com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o Status!");
    echo json_encode($msg);
}

?>