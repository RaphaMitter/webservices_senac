<?php
 
include_once("service/conexao.php");
include_once("controller/controllerUsuario.php");
include_once("model/modelUsuario.php");
 
$data = json_decode(file_get_contents("php://input"),true);
$nome = $data["nome"];
$sobrenome = $data["sobrenome"];
$email = $data["email"];
$senha = $data["senha"];
$id_status = $data["id_status"];
$id_usuario = $data["id_usuario"];
 
$controllerUsuario = new controllerUsuario();
$resultado = $controllerUsuario($nome, $sobrenome, $email, $senha, $id_status, $id_usuario);
 
if($resultado) {
    $msg = array ("msg"=> "Cadastro atualizado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array ("msg"=> "Não foi possível atualizar o cadastro!");
    echo json_encode($msg);
}
 
?>