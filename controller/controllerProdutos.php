<?php

class controllerProdutos {
    public function listarProdutos(){
  
        try{
            $modelProdutos = new modelProdutos();
            return $modelProdutos->listarProdutos();

        } catch(PDOException $e){
            return false;
        }

    }

    public function cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem){
    try{
        $modelProdutos = new modelProdutos();
        return $modelProdutos->cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem);
    } catch(PDOException $e){
        return false;
    }
    }

    public function atualizarProduto($nome, $preco, $id_categoria, $id_status, $descricao, $imagem, $id_produto){
        try{
            $modelProdutos = new modelProdutos();
            return $modelProdutos->atualizarProduto($nome, $preco, $id_categoria, $id_status, $descricao, $imagem, $id_produto);
        } catch (PDOException $e){
            return false;
        }
    }


}