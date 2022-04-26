<?php

class investimentos implements interfaceCrud
{
    private $id;
    private $nome;
    private $qtd;

    public function setId($val)
    {
        $this->id = $val;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setNome($val)
    {
        $this->nome = $val;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setQtd($val)
    {
        $this->qtd = $val;
    }
    public function getQtd()
    {
        return $this->qtd;
    }

    public function salvar(array $dados)
    {
        $this->nome = $dados['nome']; // 
        $this->qtd = $dados['qtd'];
        
    }
    public function editar(int $id, array $dados): bool
    {
        
        return true;
    }
    public function deletar(int $int): bool
    {
        if ($this->bd->query("DELETE FROM investimentos WHERE id = $this->id")) {
            return true;
        } else {
            return false;
        }
    }
    public function listar(int $id = null): array
    {
        $sql = "SELECT * FROM investimentos";
        if ($id) {
            $sql .= " WHERE id = $id";
        }
        $resultado = $this->bd->query($sql);
        $lista = array();
        while ($linha = $resultado->fetch_assoc()) {
            $lista[] = $linha;
        }
        return $lista;
    }
}
