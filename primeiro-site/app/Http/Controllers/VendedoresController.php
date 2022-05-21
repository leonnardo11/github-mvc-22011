<?php

namespace App\Http\Controllers;
use App\Models\Vendedores;

use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vendedores::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json = $request->getContent();
        return Vendedores::create(json_decode($json, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor = Vendedores::find($id);
        if($vendedor){
            return $vendedor;
        }else{
            return json_encode([
                $id => 'Vendedor não encontrado'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendedor = Vendedores::find($id);
        if($vendedor){
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [$id => 'Vendedor atualizado com sucesso'] : [$id => 'Erro ao atualizar vendedor'];
        }else{
            $ret = [$id => 'Vendedor não encontrado'];
        }
        return json_encode($ret);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedor = Vendedores::find($id);
        if($vendedor){
            $ret = $vendedor->delete() ? [$id => 'Vendedor Deletado.'] : [$id => 'Erro'];
        }else{
            $ret = [$id => 'Vendedor não encontrado.'];
        }
        return json_encode($ret);
    }
}
