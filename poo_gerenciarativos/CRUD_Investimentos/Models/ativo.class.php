<?php 

require __DIR__ . '/Model.class.php';

class Ativo extends Model{
    public function __construct(){
        $this->tabela = 'ativos';
        parent::__construct(); // chama o construtor da classe pai
    }
    function inserir(array $dados):?int{
        
        return null;
     }
     function atualizar(int $id, array $dados):bool{
        return true;
     }
     function apagar(int $id):bool{
        return true;
     }
     function listar(int $id = null):?array{
        return null;
     }
}