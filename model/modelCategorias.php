<?php

class modelCategorias{
    
    public function listarCategorias(){
        try{
            $conn = Database::conexao();
            $consultaCategorias = $conn->query("SELECT * tbl_categorias");
            $resultado = $consultaCategorias->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch(PDOException $e){

        }
    }

    public function cadastrarCategorias($nome_categoria, $id_status){
        try{
            $conn = Database::conexao();
            $inserirCategorias = $conn->prepare("INSERT INTO tbl_categorias (nome_categoria, id_status, data_cadastro) VALUES (:nome_categoria, :id_status, now())");

            $inserirCategorias->bindParam(':nome_categoria', $nome_categoria);
            $inserirCategorias->bindParam(':id_status', $id_status);
            $inserirCategorias->execute();

            return true;
        }catch (PDOException $e){
            echo $e;
            return false;
        }
    }

    public function atualizarCategorias($id_categoria, $nome_categoria, $id_status){
        try{
            $conn = Database::conexao();
            $atualizarCategoria = $conn->prepare("UPDATE tbl_categorias SET id_categoria = :id_categoria, nome_categoria = :nome_categoria, id_status = : id_status , WHERE id_categoria = :id_categoria");

            $atualizarCategoria->bindParam("id_categoria", $id_categoria);
            $atualizarCategoria->bindParam("nome_categoria", $nome_categoria);
            $atualizarCategoria->bindParam("id_status", $id_status);
            $atualizarCategoria->execute();

            return true;
        } catch(PDOException $e){
            echo $e;
            return false;
        }
    }
}



?>