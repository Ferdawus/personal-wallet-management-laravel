<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use App\Models\ExpenseCategory;

use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    public function reportExpese()
    {
        $ExpenseCategories = ExpenseCategory::all();
        return view('expense.report.index',compact('ExpenseCategories'));
    }
    
}
