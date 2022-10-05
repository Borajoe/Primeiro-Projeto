<div class="p-3 mb-2 bg-secondary bg-gradient text-white bg-opacity-75">
<x-layout title="Solicitações em Andamento">

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <a href="{{route('home.create')}}" class="btn btn-primary">Solicitar</a>
    
    <ul class="list-group">
         @foreach ($solicitacoes as $solicitacao)
         <li class="list-group-item list-group-item-primary">Solicitações</li>
         <li class="list-group-item  d-flex justify-content-between align-items-center">{{$solicitacao->nome}}
            
            <form action="{{route('home.destroy', $solicitacao->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
            
            </form>
        </li>  
         
     @endforeach
    </ul>


     




</x-layout>
</div>