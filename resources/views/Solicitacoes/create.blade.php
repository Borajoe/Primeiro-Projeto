<x-layout title="Nova Solicitação">
    <x-solicitacao.form :action="route('home.store')" :nome="old('nome')" :update="false" />
</x-layout>