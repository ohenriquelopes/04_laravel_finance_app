<x-layout>
    <x-slot name="title">
        Controle de Financas
    </x-slot>

    <div class="container">
        <h1>Gerenciamento de financas</h1>

        <a href="{{ route('transactions.create') }}" class="btn-transaction">Criar Transacao</a>

        <div class="transaction-container">
            @foreach ($transactions as $transaction)
                <div class="transaction-each">
                    <p>Descrição: {{ $transaction->description }}</p>
                    <p>Valor: {{ $transaction->amount }}</p>
                    <p>Tipo: {{ $transaction->type }}</p>
                    <p>Categoria: {{ $transaction->category }}</p>
                    <a href="{{ route('transactions.edit', $transactions->id) }}" class="btn-edit">Editar</a>
                </div>
            @endforeach
        </div>

    </div>

</x-layout>
