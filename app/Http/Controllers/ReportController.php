<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function incomeReport()
    {
        $IncomeCategories = IncomeCategory::all();
        return view('income.report.index', compact('IncomeCategories'));

    }
    public function reportExpese()
    {
        $ExpenseCategories = ExpenseCategory::all();
        return view('expense.report.index', compact('ExpenseCategories'));
    }
    
    public function generateIncomeReport(Request $request)
    {
        if(is_null($request->CategoryId)){
            $Incomes = Income::select('incomes.*', 'income_categories.Name as CategoryId')
            ->leftJoin('income_categories', 'incomes.CategoryId', '=', 'income_categories.id')
            // ->where('CategoryId', $request->CategoryId)
            ->whereBetween('IncomeDate', [$request->DateFrom, $request->DateTo])
            ->get();
            return $Incomes;
        }else{
            $Incomes = Income::select('incomes.*', 'income_categories.Name as CategoryId')
            ->leftJoin('income_categories', 'incomes.CategoryId', '=', 'income_categories.id')
            ->where('CategoryId', $request->CategoryId)
            ->whereBetween('IncomeDate', [$request->DateFrom, $request->DateTo])
            ->get();
        }
         return $Incomes;
    }

    public function printIncomeReport(Request $request)
    {
        $Incomes = $this->generateIncomeReport($request);
        $TotalIncome = $Incomes->sum('Amount');

        return view('income.report.print', compact('Incomes', 'TotalIncome'));
    }

    public function generateExpenseReport(Request $request)
    {
        if(is_null($request->CategoryId)){
            $Expenses = Expense::select('expenses.*', 'expense_categories.Name as CategoryId')
            ->leftJoin('expense_categories', 'expenses.CategoryId', '=', 'expense_categories.id')
            // ->where('CategoryId', $request->CategoryId)
            ->whereBetween('ExpenseDate', [$request->DateFrom, $request->DateTo])
            ->get();
            return $Expenses;
        }else{
         $Expenses = Expense::select('expenses.*', 'expense_categories.Name as CategoryId')
            ->leftJoin('expense_categories', 'expenses.CategoryId', '=', 'expense_categories.id')
            ->where('CategoryId', $request->CategoryId)
            ->whereBetween('ExpenseDate', [$request->DateFrom, $request->DateTo])
            ->get();
        }    
        return $Expenses;
    }
    public function printExpenseReport(Request $request)
    {
        $Expenses = $this->generateExpenseReport($request);
         $TotalExpense= $Expenses->sum('Amount');

        return view('expense.report.print', compact('Expenses','TotalExpense'));
    }

    public function allReport()
    {
        return view('all_report.total_report');
    }
    public function printAllreport(Request $request)
    {
        $Incomes = $this->generateIncomeReport($request);
        $TotalIncome = $Incomes->sum('Amount');

        $Expenses = $this->generateExpenseReport($request);
        $TotalExpense = $Expenses->sum('Amount');

        return view('all_report.print_all_report',compact(
            'Incomes', 
            'TotalIncome',
            'Expenses', 
            'TotalExpense'));
    }

}
