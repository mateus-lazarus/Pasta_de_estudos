<?php

class CriaEAutentica
    {
        
        private \mysqli $conexao;

        public function __construct()
        {
            $this->conexao = new mysqli('127.0.0.1', 'root', 'euseidetudo', 'aula_senhanobanco', 3306);
        }


        private function existirConta(string $login)
        {
            $sqlQuery = 'SELECT * FROM usuarios WHERE usuarios.loginUsuario = ?';

            $comandoPreparado = $this->conexao->prepare($sqlQuery);
            $comandoPreparado->bind_param('s', $login);
            $comandoPreparado->execute();

            if ($comandoPreparado->fetch() !== null) {
                return true;
            }

            return false;
        }

        private function verificarDuplicatas(string $login) : bool
        {
            $sqlQuery = 'SELECT * FROM usuarios WHERE usuarios.loginUsuario = ?';

            $comandoPreparado = $this->conexao->prepare($sqlQuery);
            $comandoPreparado->bind_param('s', $login);
            $comandoPreparado->execute();

            $contagem = $comandoPreparado->fetch();
            if ($contagem == 0) {
                return true;
            }

            return false;
        }



        public function criarConta(string $login, string $senha)
        {
            if ($this->verificarDuplicatas($login) ) {
                $sqlQuery = 'INSERT INTO usuarios VALUES (null, ?, ?);';
                $comandoPreparado = $this->conexao->prepare($sqlQuery);

                $senhaEncriptada = password_hash($senha, PASSWORD_DEFAULT);
                $comandoPreparado->bind_param('ss', $login, $senhaEncriptada);
                $comandoPreparado->execute();

                echo 'Cadastro efetuado com sucesso.';
                return;
            }

            echo 'Já há uma conta com esse login cadastrado.';
        }


        public function autenticarConta(string $login, string $senha)
        {
            if ($this->existirConta($login) ) {
                $sqlQuery = 'SELECT senhaUsuario FROM usuarios WHERE usuarios.loginUsuario = ?';
    
                $comandoPreparado = $this->conexao->prepare($sqlQuery);
                $comandoPreparado->bind_param('s', $login);
                $comandoPreparado->execute();
    
                $resultado = $comandoPreparado->fetch();
    
                if ($resultado == password_hash($senha, PASSWORD_DEFAULT)) {
                    echo 'Login efetuado com sucesso.';
                    return true;
                }
    
                echo 'Credenciais não batem.';
                return false;
            }

            echo 'Login não é válido.';
        }


    }




 ?>