<?php

class Usuario {

    public function addUsuario($nome, $email, $cpf, $tel, $type, $senha) {
        try {
            $sql = "INSERT INTO users VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = Conexao::getConexão()->prepare($sql);
            $stmt->bindValue(1, 0);
            $stmt->bindValue(2, $nome);
            $stmt->bindValue(3, $cpf);
            $stmt->bindValue(4, $tel);
            $stmt->bindValue(5, $type);
            $stmt->bindValue(6, $email);
            $stmt->bindValue(7, password_hash($senha, PASSWORD_DEFAULT));
            $stmt->execute();

            return "Cadastrado com sucesso!";
        } catch (Exception $ex) {
            if ($ex->errorInfo[1] == 1062) {
                return 'Usuário já existente';
            } else {
                return 'Erro ao cadastrar usuário';
            }
        }
    }

    public function validarUsuario($email, $senha) {

        try {
            $sql = "SELECT * FROM users WHERE email= ?";
            $stmt = Conexao::getConexão()->prepare($sql);
            $stmt->bindValue(1, $email);

            $stmt->execute();

            $info = $stmt->fetch(PDO::FETCH_BOTH);
            $cript = $info['senha'];
            
            if (password_verify($senha, $cript)) {
                $result = $stmt->rowCount();
                return $result;
            } else {
                $result = 0;
            }

            return $result;
        
        } catch (Exception $ex) {
            return false;
        }

    }

    public function recebeUsuario($email) {
        try {
            $sql = "SELECT * FROM users WHERE email= ?";
            $stmt = Conexao::getConexão()->prepare($sql);
            $stmt->bindValue(1, $email);

            $stmt->execute();

            if ($stmt->rowcount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_BOTH);

                return $result;
            }

            return false; 

        } catch (Exception $ex) {
            return false;
        }
    }

    public function recebeUsuarioPorCampo($campo, $valor) {
        try {
            $sql = "SELECT * FROM users WHERE $campo LIKE '%$valor%'";
            $stmt = Conexao::getConexão()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(PDO::FETCH_BOTH);
                return $result;
            }

            return false;

        } catch (Exception $ex) {
            return false;
        }
    }

    public function recebeUsuarios() {
        try {
            $sql = "SELECT * FROM users";
            $stmt = conexao::getConexão()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }

}
