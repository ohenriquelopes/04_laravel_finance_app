<x-layout>
    <x-slot name="title">
        Controle de Financas
    </x-slot>


    <form action="{{ route('transactions.update', $transaction->id) }}" method="post">
    @csrf
        @method('PUT')

        <label for="description">Descricao</label>
        <input type="text" name="description" id="description" value="{{ $transaction->description }}" required>

        <label for="amount">Valor</label>
        <input type="number" name="amount" id="amount" value="{{ $transaction->amount }}" required>

        <label for="type">Tipo</label>
        <select name="type" id="type" required>
            <option value="expense" {{ $transaction->type === 'expense' ? 'selected' : '' }}>Despesa</option>
            <option value="income" {{ $transaction->type === 'income' ? 'selected' : '' }}>Receita</option>
        </select>


        <label for="category">categoria</label>
        <input type="text" name="category" id="category" value="{{ $transaction->description }}">

        <button type="submit" class="btn-transaction">Atualizar</button>
    </form>

</x-layout>
