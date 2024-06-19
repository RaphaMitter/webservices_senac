<?php

class modelStatus {

    public function listarStatus() {
        try{
            $pdo = Database::conexao();
            $resultado = $pdo->query("SELECT * FROM tbl_status");
            $resultado->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){
            return false;
        }
    }


    public function cadastrarStatus($nome_status){
        try{
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_status (nome_status, data_cadastro) VALUES (:nome_status, now() )");
            $inserir->bindParam(":nome_status", $nome_status);
            $inserir->execute();

            return true;

        } catch (PDOException $e){
            return false;
        }
    }

    public function atualizarStatus($nome_status, $id_status){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_status SET nome_status, data_atualizacao = now() WHERE id_status = :id_status");
            $atualizar->bindParam(":nome_status", $nome_status);
            $atualizar->bindParam(":id_status", $id_status);
            $atualizar->execute();
            
            return true;
        } catch (PDOException){
            return false;
        }
    }


}



?>