<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\VendedoresController;

class VendedoresControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckVendedor()
    {
        $vendedores = VendedorController;
        $this->assertTrue($vendedores->checkVendedor(1));

        $response->assertStatus(200);
    }
    public function checkVendedor(int $id):bool{
        return false;
    }
}
