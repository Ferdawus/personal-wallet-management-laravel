<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories = ExpenseCategory::all();
        return view('expense_category.index', compact('Categories'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense_category.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        try {
            ExpenseCategory::create($request->all());
            return back();
        } catch (Exception $e) {
            $e->getMessage();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        // return ExpenseCategory::find($expenseCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $expenseCategory = ExpenseCategory::find($id);

        return view('expense_category.edit',compact('expenseCategory'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       ExpenseCategory::find($request->id)->update($request->all());
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExpenseCategory::find($id)->delete();
        return back();
    }

    public function destroyAll()
    {
        ExpenseCategory::withTrashed()->delete();
        return back();
    }
    
    public function trash()
    {
        $TrashedExpenses = ExpenseCategory::onlyTrashed()->get();
        return view('expense_category.trash', compact('TrashedExpenses'));
    }

    public function restore($id)
    {
        ExpenseCategory::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function recoverAll()
    {
        ExpenseCategory::withTrashed()->restore();
        return back();
    }
    public function forceDeleted($id)
    {
        ExpenseCategory::withTrashed()->where('id', $id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {
        ExpenseCategory::onlyTrashed()->forceDelete();
        return back();
    }
}