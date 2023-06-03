<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required|in:expense,income',
            'category' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->description = $request->input('description');
        $transaction->amount = $request->input('amount');
        $transaction->type = $request->input('type');
        $transaction->category = $request->input('category');
        $transaction->user_id = auth()->user()->id;
        $transaction->save();

        return redirect('/transactions/create')->with('success', 'Transacao registrada com sucesso');
    }
}
