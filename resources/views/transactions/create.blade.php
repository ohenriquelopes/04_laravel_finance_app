<x-layout>
    <x-slot name="title">
        Controle de Financas
    </x-slot>

    <div class="container">
        <h1>Gerenciamento de financas</h1>

        <form action="{{ route('transactions.store') }}" method="post">
            @csrf

            <label for="description">Descricao</label>
            <input type="text" name="description" id="description" required>

            <label for="amount">Valor</label>
            <input type="number" name="amount" id="amount" required>

            <label for="type">Tipo</label>
            <select name="type" id="type" required>
                <option value="expense">Despesa</option>
                <option value="income">Receita</option>
            </select>

            <label for="category">Categoria</label>
            <input type="text" name="category" id="category" required>

            <button type="submit">Salvar</button>
        </form>
    </div>

</x-layout>
