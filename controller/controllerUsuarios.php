<?php

class controllerUsuarios {
    public function listarUsuarios(){
    try {
        $modelUsuarios = new modelUsuarios();
        return $modelUsuarios->listarUsuarios();
    } catch (PDOException $e) {
        return false;
    }
}

public function cadastrarUsuario($nome, $sobrenome, $email, $senha) {
    try {
        $modelUsuarios = new modelUsuarios();
        return $modelUsuarios->cadastrarUsuario($nome, $sobrenome, $email, $senha);
    } catch (PDOException $e) {
        return false;
    }
    
}

public function atualizarUsuario($nome, $sobrenome, $email, $senha, $id_usuario) {
    try {
        $modelUsuarios = new modelUsuarios();
        return $modelUsuarios->atualizarUsuario($nome, $sobrenome, $email, $senha, $idStatus, $id_usuario);
        } catch(PDOException $e) {
            return false;
        }
}

public function autenticarUsuario($email, $senha){
    try {
        $modelUsuarios = new modelUsuarios();
        return $modelUsuarios->autenticarUsuario($email, $senha);
    } catch (PDOException $e) {
        return false;
    }
}

}


?>