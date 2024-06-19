<?php

class controllerStatus{

    public function listarStatus(){
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->listarStatus();

        } catch (PDOException) {
            return false;
        }
    }

    public function cadastrarStatus($nome_status){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->cadastrarStatus($nome_status);

        } catch (PDOException $e){
            return false;
        }
    }

    public function atualizarStatus($nome_status, $id_status){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->atualizarStatus($nome_status, $id_status);

        } catch(PDOException $e){
            return false;
        }
    }
}




?>