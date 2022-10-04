<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitacaoFormRequest;
use Illuminate\Support\Facades\DB;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacoes = Solicitacao::all();
        $mensagemSucesso = session('mensagem.sucesso');
        

        return view('solicitacoes.index')->with('solicitacoes', $solicitacoes)->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Solicitacao $solicitacao, SolicitacaoFormRequest $request)
    {
        
        Solicitacao::create($request->all());

        return to_route('home.index')->with('mensagem.sucesso', "Solicitação '{$solicitacao->nome}' enviada com sucesso");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitacao $solicitacao)
    {
        $solicitacao->delete();

        return to_route('home.index')
            ->with('mensagem.sucesso', "Solicitação '{$solicitacao->nome}' removida com sucesso");
    }
}
