<?php

include_once("services/conexao.php");
include_once("controller/controllerCategoria.php");
include_once("model/modelCategorias.php");

$controllerCategorias = new controllerCategorias();
$resultado = $controllerCategorias->listarCategorias();

$retorno = array("categorias" => $resultado);
echo json_encode($retorno);

?>