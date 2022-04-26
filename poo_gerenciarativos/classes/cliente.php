<?php 

chdir(__DIR__);
require_once "../interfaces/interfaceCrud.php";
require("../banco/conecta.php");

class Clientes implements interfaceCrud{
    private $id;
    private $nome;
    private $telefone;


    public function __construct($bd)
    {
        $this->bd = $bd;
    }

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
        //chechar os campos obrigátorios
        if(empty($_POST['nome'] || $_POST['telefone'] )){
            die('ERRO! os campos são obriatórios');
        }
        
        //Preparamos a consulta para evitar SQL Injection
        $stmt = $this->db->prepare(" INSERT INTO clientes
                                    (nome, telefone)
                                VALUES 
                                    (:nome, :telefone)");
        
        $valores[':nome'] = $_POST['nome'];
        $valores[':telefone'] = $_POST['telefone'];

        
        //Executamos a consulta SQL
        if( $stmt->execute($valores) ){
            header('Salvo com sucesso!');
        } else {
            echo "<br><br> Não consegui gravar no banco :-(";
        }

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