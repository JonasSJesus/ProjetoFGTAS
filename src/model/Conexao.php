<?php

abstract class Conexao
{
    // Insira os dados do servidor do banco aqui
    private $host = 'SEU_HOST';
    private $dbname = 'SEU_BANCO';
    private $usuario = 'SEU_USUARIO';
    private $senha = 'SUA_SENHA';
    protected $pdo;

    public function __construct()
    {
        $this->conexao();
    }

    protected function conexao()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->senha);

        return $this->pdo;
    }
}
