<x-layout title="">
    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <div class="container">
        <div class="d-flex justify-content-center card table-responsive-sm">
            <div class="card-header">
            <div class="col-8">
                <label for="nome" class="form-label">Nome do paciente:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
            </div>
            <div class="col-4">
                <label for="nome" class="form-label">Prontuario:</label>
                <input type="text" id="prontuario" name="prontuario" class="form-control"
                value="{{ old('prontuario') }}">
                <input type="checkbox" name="aceite">
                <label>Solicitação de urgencia</label>
            </div>
            
                
       
            <button type="submit" class="btn btn-primary mt-2">Solicitar</button>
        </div>

        
    </form>

</x-layout>