<x-layout title="Editar">
    <form action="{{ route('home.update', $solicitacao->id)}}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome do paciente:</label>
                <input type="text" id="nome" name="nome" class="form-control" 
                value="{{ $solicitacao->nome}}">
            </div>
            <div class="col-4">
                <label for="nome" class="form-label">Prontuario:</label>
                <input type="text" id="prontuario" name="prontuario" 
                class="form-control"
                value="{{$solicitacao->prontuario}}">
                
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>  
    </form>
</x-layout>