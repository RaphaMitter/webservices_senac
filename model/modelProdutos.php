<?php

class modelProdutos{

    public function listarProdutos() {

    try{
        $pdo = Database::conexao();
        $consulta = $pdo->query("SELECT * FROM tbl_produtos");
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    } catch(PDOException $e) {
        return false;
    }
   
    }

    public function cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem) {
        try{
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_produtos 
                                        (nome_produto, id_categoria, preco, id_status, descricao, imagem, data_cadastro)
                                      VALUES (:nome, :id_categoria, :preco, 1, :descricao, :imagem, now() )");
            $inserir->bindParam(':nome', $nome);
            $inserir->bindParam(':id_categoria', $id_categoria);
            $inserir->bindParam(':preco', $preco);
            $inserir->bindParam(':descricao', $descricao);
            $inserir->bindParam(':imagem', $imagem);
            $inserir->execute();

            return true;

        } catch(PDOException $e) {
            return false;
        }
    }

    public function atualizarProduto($nome, $preco, $id_categoria, $id_status,  $descricao, $imagem, $id_produto){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_produtos SET nome_produto = :nome, id_categoria = :id_categoria, preco = :preco, descricao = :descricao, imagem = :imagem, id_status = :id_status, data_atualizacao = now() WHERE id_produto = :id_produto");

            $atualizar->bindParam(":nome",$nome);
            $atualizar->bindParam(":id_categoria",$id_categoria);
            $atualizar->bindParam(":preco",$preco);
            $atualizar->bindParam(":descricao",$descricao);
            $atualizar->bindParam(":imagem",$imagem);
            $atualizar->bindParam(":id_status",$id_status);
            $atualizar->bindParam(":id_produto",$id_produto);
            $atualizar->execute();

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

}


?>