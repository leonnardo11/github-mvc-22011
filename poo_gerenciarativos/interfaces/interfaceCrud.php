<?php

interface interfaceCrud
{
    public function salvar(array $dados);
    public function editar(int $id, array $dados): bool;
    public function deletar(int $int): bool;
    public function listar(int $id = null): array;
}
