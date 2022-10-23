<x-layout title="">
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset
    <div class="container">   
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
                            <form action="{{ route('home.destroy', $solicitacao->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" >Delete</button>
                            </form>
                        </th>
                </tr>
                @endforeach   
            </tbody>
            </table>   
        </div>
</x-layout>
