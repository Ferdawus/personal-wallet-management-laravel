<?php

namespace App\Http\Controllers;

use App\Models\IncomeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories = IncomeCategory::all();
        return view('income_category.index', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = IncomeCategory::all();
        return view('income_category.create', compact('Categories'));
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
            IncomeCategory::create($request->all());
            return back();
        } catch (Exception $e) {
            $e->getMessage();
        }
        // IncomeCategory::create($request->all());
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeCategory $incomeCategory)
    {
        return IncomeCategory::find($incomeCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incomeCategory = IncomeCategory::find($id);
        return view('income_category.edit',compact('incomeCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        IncomeCategory::find($request->id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IncomeCategory::find($id)->delete();
        return back();
    }
    public function destroyAll()
    {
        IncomeCategory::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $TrashedIncomes = IncomeCategory::onlyTrashed()->get();

        return view('income_category.trash', compact('TrashedIncomes'));
    }
    public function forceDelete($id)
    {
        IncomeCategory::withTrashed()->where('id', $id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        IncomeCategory::withTrashed()->where('id', $id)->restore();
        return back();
    }
    public function recoverAll()
    {
        
        IncomeCategory::withTrashed()->restore();
        return back();
    }
    public function emptyTrash()
    {
        
        IncomeCategory::onlyTrashed()->forceDelete();
        return back();
    }
   
}
