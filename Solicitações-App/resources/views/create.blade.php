<x-layout title="Nova Solicitação">
    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome do paciente:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
            </div>
            <div class="col-4">
                <label for="nome" class="form-label">Prontuario:</label>
                <input type="text" id="prontuario" name="prontuario" class="form-control"
                    value="{{ old('prontuario') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>