<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeController extends Controller
{
    protected $ValidationRules = [
        'Amount' => 'min:-2147483647|max:2147483647',
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IncomeCategories = IncomeCategory::all();
        // $Incomes = Income::all();

        $Incomes = income::select(
                'incomes.id',
                'income_categories.Name as CategoryName',
                'incomes.Amount',
                'incomes.Description',
                'incomes.IncomeDate',
                'incomes.created_at',
                'incomes.updated_at'
            )
            ->leftJoin(
                'income_categories',
                'incomes.CategoryId',
                '=',
                'income_categories.id'
            )->get();


        return view('income.index', compact('IncomeCategories', 'Incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $IncomeCategories = IncomeCategory::all();
        return view('income.create', compact('IncomeCategories'));
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
        // Income::create($request->all());
        $Income = new Income();
        $this->validate($request, $this->ValidationRules);

        $Income->CategoryId  = $request->CategoryId;
        $Income->Amount      = $request->Amount;
        $Income->Description = $request->Description;
        $Income->IncomeDate  = date('Y-m-d');
        // $Income->created_by  = auth()->user()-id;
        $Income->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        // return Income::find($income);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $IncomeCategories = IncomeCategory::all();
        $Income = Income::find($id);
        return view('income.edit', compact('IncomeCategories', 'Income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->all();

        Income::find($request->id)->update($request->all());
        $Income = Income::find($request->id);

        return back();

        // $Income = new Income();
        // $Income = Income::find($request->id);
        // $Income->CategoryId  = $request->CategoryId;
        // $Income->Amount      = $request->Amount;
        // $Income->Description = $request->Description;
        // $Income->save();
        // return $Expense->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Income::find($id)->delete();
        return back();
        // $income->delete();
        // return $this->index();
    }
    public function destroyAll()
    {
        Income::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $TrashedIncomes = Income::onlyTrashed()->get();
        return view('income.trash', compact('TrashedIncomes'));
    }
    public function forceDeleted($id)
    {
        Income::withTrashed()->where('id', $id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        Income::withTrashed()->where('id', $id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Income::withTrashed()->restore();
        return back();
    }
    public function emptyTrash()
    {
        Income::onlyTrashed()->forceDelete();
        return back();
    }
}
