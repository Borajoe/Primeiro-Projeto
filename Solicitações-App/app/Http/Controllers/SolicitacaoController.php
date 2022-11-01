<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSolicitacaoRequest;
use App\Http\Requests\UpdateSolicitacaoRequest;
use Faker\Core\Color;

use function Termwind\style;

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

        return view('index')->with('solicitacoes', $solicitacoes)->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Solicitacao $solicitacao)
    {

        return view('create')->with('solicitacao', $solicitacao);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSolicitacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolicitacaoRequest $request, Solicitacao $solicitacao)
    {

        $solicitacaoa = $request->has('aceite');

        if($solicitacao == true)
        {

            Solicitacao::create($request->all());
        } else 
        {
            Solicitacao::create($request->all());
        }
                    

        return to_route( 'home.index', )->with('solicitacao', $solicitacaoa)
        ->with('mensagem.sucesso', "Solicitação do paciente '{$request->nome}, Prontuario nº {$request->prontuario}' enviada com sucesso");
        
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitacao $solicitacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitacao $solicitacao)
    {

        return view('edit')->with('solicitacao', $solicitacao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolicitacaoRequest  $request
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSolicitacaoRequest $request, Solicitacao $solicitacao)
    {
        $solicitacao->fill($request->all());
        $solicitacao->save();



        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitacao $solicitacao)
    {
        $solicitacao->delete();

        return to_route('home.index')->with('mensagem.sucesso', "Solicitação do Paciente '{$solicitacao->nome}, Prontuario nº {$solicitacao->prontuario}' removida com sucesso");
    }
}
