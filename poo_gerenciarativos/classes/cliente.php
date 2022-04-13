<?php 

chdir(__DIR__);
require_once "../interfaces/interfaceCrud.php";

class Clientes implements interfaceCrud{
    private $id;
    private $nome;
    private $telefone;

    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }
    public function setNome($val){
        $this->nome = $val;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setTelefone($val){
        $this->telefone = $val;
    }

    public function getTelefone(){
        return $this->telefone;
    }


    public function salvar(array $dados){
        $this->nome = $dados['nome']; // 
        $this->telefone = $dados['telefone'];
      

    }
    public function editar(int $id, array $dados): bool{
        
        return true;
    }
    public function deletar(int $int): bool{
        if($this->bd->query("DELETE FROM clientes WHERE id = $this->id")){
            return true;
        }else{
            return false;
        }
        
    }
    public function listar(int $id = null): array{
        $sql = "SELECT * FROM clientes";
        if($id){
            $sql .= " WHERE id = $id"; 
        }
        $resultado = $this->bd->query($sql);
        $lista = array();
        while($linha = $resultado->fetch_assoc()){
            $lista[] = $linha;
        }
        return $lista;
    }
}