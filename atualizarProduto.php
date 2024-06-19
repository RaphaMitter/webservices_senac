<?php

include_once("services/conexao.php");
include_once("controller/controllerProdutos.php");
include_once("model/modelProdutos.php");

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data["nome"];
$preco = $data["preco"];
$id_categoria = $data["id_categoria"];
$id_status = $data["id_status"];
$descricao = $data["descricao"];
$imagem = $data["imagem"];
$id_produto = $data["id_produto"];

$controllerProdutos = new controllerProdutos();
$resultado = $controllerProdutos->atualizarProduto($nome, $preco, $id_categoria, $id_status, $descricao, $imagem, $id_produto);

if($resultado) echo "deu bom";








?>