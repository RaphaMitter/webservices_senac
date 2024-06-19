<?php

include_once("services/conexao.php");
include_once("controller/controllerUsuarios.php");
include_once("model/modelUsuarios.phph");

$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->listarUsuarios();

if($resultado) {
    $msg = aary("usuarios" => $resultado);
    echo json_encode($msg);
}else {
    $msg = array("usuarios" => []);
    echo json_encode($msg);
}
?>