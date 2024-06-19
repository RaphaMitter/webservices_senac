<?php

class controllerCategorias {

    public function listarCategorias(){
        try{
            $modelCategorias = new modelCategorias();
            return $modelCategorias = listarCategorias();
        }catch (PDOException $e){
            return false;
        }
    }

    public function cadastrarCategorias($nome_categoria, $id_status){
        try{
            $modelCategorias = new modelCategorias();
            return $modelCategorias->cadastrarCategorias($nome_categoria, $id_status);
        } catch (PDOException $e){
            return false;
        }
    }

    public function atualizarCategorias($id_categoria, $nome_categoria, $id_status){
        try {
            $modelCategorias = new modelCategorias();
            return $modelCategorias->atualizarCategorias($id_categoria, $nome_categoria, $id_status);
        }catch (PDOException $e) {
            return false;
        }
    }

}




?>