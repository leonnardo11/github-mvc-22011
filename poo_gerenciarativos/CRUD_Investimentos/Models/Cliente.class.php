<?php 

require __DIR__ . '/Model.class.php';

class Cliente extends Model{
    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'clientes';

    }
    function inserir(array $dados):?int{
        $stmt = $this->prepare("INSERT INTO {$this->tabela} (nome, telefone) VALUES (:nome, :telefone)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':telefone', $dados['telefone']);

          if($stmt->execute()){
               echo $this->lastInsertId();
         }        

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

$cliente = new Cliente();

$cliente->inserir(['nome' => 'João', 'telefone' => '99999999']);