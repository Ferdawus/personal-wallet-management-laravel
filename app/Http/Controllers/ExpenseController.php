<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseController extends Controller
{
    protected $ValidationRules = [
        'Amount'=> 'min:-2147483647|max:2147483647',
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ExpensesCategories = ExpenseCategory::all();
        $Expenses = Expense::select(
            'expenses.id',
            'expense_categories.Name as CategoryName',
            'expenses.Amount',
            'expenses.Description',
            'expenses.ExpenseDate',
            'expenses.created_at',
            'expenses.updated_at'
        )
            ->leftJoin(
                'expense_categories',
                'expenses.CategoryId',
                '=',
                'expense_categories.id'
            )->get();

        return view('expense.index',compact('ExpensesCategories', 'Expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ExpensesCategories = ExpenseCategory::all();
        return view('expense.create',compact('ExpensesCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Expense = new Expense();

        $this->validate($request,$this->ValidationRules);

        $Expense->CategoryId = $request->CategoryId;
        $Expense->Amount     = $request->Amount;
        $Expense->Description= $request->Description;
        $Expense->ExpenseDate= date('Y-m-d');
        $Expense->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        return Expense::find($expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        $Expense = Expense::find($expense)->first();
        $ExpenseCategories = ExpenseCategory::all();
        return view('expense.edit',compact('Expense', 'ExpenseCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Expense = new Expense();
        $Expense = Expense::find($request->id);
        $Expense->CategoryId  = $request->CategoryId;
        $Expense->Amount      = $request->Amount;
        $Expense->Description = $request->Description;
        $Expense->save();
        // return $Expense->update();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        return back();
    }
    public function destroyAll()
    {
        Expense::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $TrashedExpenses = Expense::onlyTrashed()->get();
        return view('expense.trash', compact('TrashedExpenses'));  
    }
    public function restore($id)
    {
        Expense::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Expense::withTrashed()->restore();
        return back();
    }

    public function forceDeleted($id)
    {
        Expense::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {
        Expense::onlyTrashed()->forceDelete();
        return back();
    }
}
