<?php

include_once("services/conexao.php");
include_once("controller/controllerProdutos.php");
include_once("model/modelProdutos.php");

$data = json_decode(file_get_contents('php://input'), true);

//Setar valores da requisição JSON nas variaveis do PHP
$nome = $data["nome"];
$preco = $data["preco"];
$id_categoria = $data["id_categoria"];
$descricao = $data["descricao"];
$imagem = $data["imagem"];

//Encaminhados para o banco de dados
$controllerProdutos = new controllerProdutos();
$resultado = $controllerProdutos->cadastrarProduto( $nome, $preco, $id_categoria, $descricao, $imagem);

if($resultado) echo "deu bom";

?>