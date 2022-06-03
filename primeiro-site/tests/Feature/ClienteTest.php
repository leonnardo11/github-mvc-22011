<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Clientes;

class ClienteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $cliente = Clientes::create(['nome' => 'Leonardo teste', 'endereco' => 'minha rua', 'email' => 'teste@teste', 'telefone' => '9430942309']);
        $this->assertDatabaseHas('clientes', ['nome' => 'Leonardo teste']);

        /*  $cliente->destroy($cliente->id);
        $this->assertDatabaseMissing('clientes', ['nome' => 'Leoonardo teste']); */


    }
}
