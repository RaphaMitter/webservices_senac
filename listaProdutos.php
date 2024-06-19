<?php

include_once("services/conexao.php");
include_once("controller/controllerProdutos.php");
include_once("model/modelProdutos.php");

$controllerProdutos = new controllerProdutos();
$resultado = $controllerProdutos->listarProdutos();

$retorno = array("produtos" => $resultado);
echo json_encode($retorno);

?>