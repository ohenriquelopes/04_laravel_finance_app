<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;



class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function  create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $transaction = new Transaction;
        $transaction->description = $request->input('description');
        $transaction->amount = $request->input('amount');
        $transaction->type = $request->input('type');
        $transaction->category = $request->input('category');
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'transaction create successfully');

    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.edit', compact('transaction',));
    }

}
