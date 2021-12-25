<?php

    class Conexao
    {
        private $host   = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user   = 'root';
        private $pass   = 'root';

        public function conectar()
        {
            try{
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;

            } catch(PDOException $e) {
                die('<p>'.$e->getMessage().'</p>');
            }
        }
    }
