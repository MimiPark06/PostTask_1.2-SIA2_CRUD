<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses=Expenses::latest()->paginate(5);
        return view ('expenses.index',compact('expenses'))
        ->with('i',(request()->input('page',1)-1)*5);
    
    }
    
    public function create()
    {
        return view('expenses.create');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
        'itemname'=>'required',
        'type'=>'required',
        'price'=>'required',
    
    ]);
        Expenses::create($request->all());
    
        return redirect()->route('expenses.index')
        ->with('success', 'Item added successfully.');
    }
    
    
    
    public function edit(Expenses $expense)
    {
    
        return view('expenses.edit',compact('expense'));
    }
    
        public function update(Request $request,Expenses $expense)
    {
        $request->validate([
    
    ]);
    
        $expense->update($request->all());
    
        return redirect()->route('expenses.index')
        ->with('success','Item updated successfully');
    
    }
    
        public function destroy(Expenses $expense)
    {
        $expense->delete();
    
        return redirect()->route('expenses.index')
        ->with('success','Item Paid successfully');
    
    }
}
