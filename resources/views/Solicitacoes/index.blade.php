<x-layout title="Solicitações em Andamento">

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <a href="{{route('home.create')}}" class="btn btn-primary">Solicitar</a>
    <div class="container">
<div class="card table-responsive-sm " style="width: 75rem;">
    <div class="card-header">
    <table class="table table-borderless">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Prontuario</th>
        </tr>
          
        </thead>
    </div>
        <tbody>
          <tr>           
            @foreach ($solicitacoes as $solicitacao)
            
            <td>{{$solicitacao->nome}}</td>
            <td>{{$solicitacao->prontuario}}</td>
            <th>
            <form action="{{route('home.destroy', $solicitacao->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button> 
            </form>
            </th>
          </tr>
          @endforeach
        </tbody>
    </table>

</div> 
</x-layout>

