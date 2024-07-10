<?php

namespace App\Http\Controllers;

use App\Models\Expense;

use Illuminate\Http\Request;

class expenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('index', compact('expenses'));
    }

    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' =>
            'required|string|max:255', 'description' =>
            'required|string|max:255',
            'amount' =>
            'required|numeric', 'date' =>
            'required|date'
        ]);
        Expense::create($validated);
        return redirect('/expenses');
    }

    public function show($id)
    {
        $expense = Expense::find($id);
        return view('show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        return view('edit', compact('expense'));
    }

    public function update_expense(Request $request, $id)
    {
        $expense = Expense::find($id);
        $expense->title = $request->title;
        $expense->description = $request->description;
        $expense->amount = $expense->amount;
        $expense->date = $expense->date;
        $expense->save();
        return redirect('/expenses');
    }

    public function delete($id){
        $expense = Expense::find($id);
        $expense->delete();
        return redirect('/expenses');
        
    }
}
