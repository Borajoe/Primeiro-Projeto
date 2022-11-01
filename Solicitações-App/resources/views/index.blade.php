<x-layout title="">
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset
    <div class="container mt-5">   
        <div class="d-inline-block card table-responsive-sm ">
            <div class="card-header">
                <table class="d-inline-block table table-borderless table-reponsive">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="col" style="width: 50rem;">Nome</th>
                            <th scope="col" style="width: 50rem;">Prontuario</th>
                        </tr>
                    </thead>
            </div>
            <tbody>
                <tr>
                    
                    @foreach ($solicitacoes as $solicitacao)
                        <td>{{ $solicitacao->nome }}</td>
                        <td>{{ $solicitacao->prontuario }}</td>
                        
                        <th>
                        <th>
                            <span class="d-flex">
                            <a href="{{ route ('home.edit', $solicitacao->id)}}" class="btn btn-primary btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                            
                            </a>
                            
                        </span>
                        
                        </th>
                        <th>
                            <form action="{{ route('home.destroy', $solicitacao->id) }}" method="post" class="ms">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                  </svg></button>
                            </form>
                            
                        </th>
                </tr>
                @endforeach   
                
            </tbody>
            </table>   
        </div>
</x-layout>
