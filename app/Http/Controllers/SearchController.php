<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Expense;
use App\Models\ExpenseCategory;



class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->SearchOption == 'Income') {
            $IncomeSearch = Income::select(
                'incomes.Amount',
                'incomes.Description',
                'incomes.IncomeDate',
                'income_categories.Name as IncomeCategory'
            )
                ->leftJoin('income_categories', 'incomes.CategoryId', '=', 'income_categories.id')
                ->where('income_categories.Name', 'LIKE', '%' . $request->search . '%')
                ->get();

            return view('layouts.incomeSearch', compact('IncomeSearch'));
        } else {
            $ExpenseSearch = Expense::select(
                'expenses.Amount',
                'expenses.Description',
                'expenses.ExpenseDate',
                'expense_categories.Name as ExpenseCategory'
            )
                ->leftJoin('expense_categories', 'expenses.CategoryId', '=', 'expense_categories.id')
                ->where('expense_categories.Name', 'LIKE', '%' . $request->search . '%')
                ->get();

            return view('layouts.expenseSearch', compact('ExpenseSearch'));
        }
    }

}
