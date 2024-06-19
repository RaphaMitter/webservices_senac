<?php

include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome_status = $data["nome_status"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->cadastrarStatus($nome_status);

if($resultado){
$msg = array("msg" => "Cadastro efetuado com sucesso!");
echo json_encode($msg);
}else {
    $msg = array("erro" => "Erro ao cadastrar o Status");
    echo json_encode($msg);
}

?>