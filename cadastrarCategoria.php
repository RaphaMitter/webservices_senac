<?php

include_once("services/conexao.php");
include_once("controller/controllerCategoria.php");
include_once("model/modelCategorias.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome_categoria = $data["nome_categoria"];
$id_status = $data["id_status"];

$controllerCategorias = new controllerCategorias();
$resultado = $controllerCategorias->cadastrarCategorias($nome_categoria, $id_status);

if($resultado) echo "Cadastrado";

?>