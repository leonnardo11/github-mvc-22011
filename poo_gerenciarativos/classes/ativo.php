<?php

class Ativos implements interfaceCrud 
{
    private $id;
    private $nome;

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

    public function salvar(array $dados)
    {
        $this->nome = $dados['nome'];

    }
    public function editar(int $id, array $dados): bool
    {

        return true;
    }
    public function deletar(int $int): bool
    {
        if ($this->bd->query("DELETE FROM ativos WHERE id = $this->id")) {
            return true;
        } else {
            return false;
        }
    }
    public function listar(int $id = null): array
    {
        $sql = "SELECT * FROM ativos";
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
