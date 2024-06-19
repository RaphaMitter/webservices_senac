<?php

include_once("services/conexao.php");
include_once("controller/controllerUsuarios.php");
include_once("model/modelUsuarios.php");

$data = json_decode(file_get_contents("php://input"), true);

//Dados de login
$email = $data["email"];
$senha = $data["senha"];

$controllerUsuarios = new controllerUsuarios();
$retorno = $controllerUsuarios->autenticarUsuario($email, $senha);

if($retorno) {
    $msg = array("msg" => "Usuário válido", "usuario" => $retorno);
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Usuário e/ou senha inválidos", "usuario" => []);
    echo json_encode($msg);
}
?>