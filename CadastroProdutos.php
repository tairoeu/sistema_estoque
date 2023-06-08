<?php 
// Config to DataBase

class CadastroProdutos{
    private const HOST = "localhost";
    private const NAME = "estoque";
    private const USER = "root";
    private const PASS = "";

    public  function __construct(){
        $this->setConexao();
    }

    public function setConexao(){
        $conn = new PDO("mysql:host=".self::HOST.";dbname=".self::NAME, self::USER, self::PASS);
        if(!$conn){
        echo "Não foi possível consultar os produtos";
        }else{
            echo "Conectado";
        }
    }

    public function inserir(){
        
    }

    public function remover(){

    }

    public function listar(){
        $query = "SELECT * FROM produtos";
    }

}

