<x-layout title="Solicitações em Andamento">

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <a href="{{route('home.create')}}" class="btn btn-primary">Solicitar</a>

    
    <ul class="list-group">
         @foreach ($solicitacoes as $solicitacao)
         <li class="list-group-item d-flex justify-content-between align-items-center">{{$solicitacao->nome}}
            
            <form action="{{route('home.destroy', $solicitacao->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
            
            </form>
        </li>  
         
     @endforeach
    </ul>


     




</x-layout>