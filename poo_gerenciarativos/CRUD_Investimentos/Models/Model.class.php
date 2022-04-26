<?php 

protected string tabela;

abstract class Model extends PDO {
    public function __construct(){
        if(is_file(__DIR__ . '/../Config/db.php')){
            die('Não há arquivo de configuração do BD');
        }
        parent::__construct(DSN, DB_USER, DB_PASS);
    }
    
}