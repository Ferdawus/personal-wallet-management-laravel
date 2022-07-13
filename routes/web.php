<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PersonalWallateController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\IncomeReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Models\ExpenseCategory;
use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PersonalWallateController::class, 'wallet'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    /*--------------  Route income soft delete-----------------*/

    Route::get('income/{id}/delete', [IncomeController::class, 'destroy']);
    Route::get('income/delete', [IncomeController::class, 'destroyAll']);
    Route::get('income/trash', [IncomeController::class, 'trash']);
    Route::get('income/{id}/delete/parmanently', [IncomeController::class, 'forceDeleted']);
    Route::get('income/delete/parmanently', [IncomeController::class, 'emptyTrash']);
    Route::get('income/{id}/restore', [IncomeController::class, 'restore']);
    Route::get('income/restore', [IncomeController::class, 'restoreAll']);
    
    /*--------------  Route income edit-----------------*/
    Route::get('/income/edit/{id}',[IncomeController::class,'edit']);
    Route::post('/income/update',[IncomeController::class,'update']);
    Route::get('income/category/edit/{id}',[IncomeCategoryController::class,'edit']);
    Route::post('income/category/update',[IncomeCategoryController::class,'update']);

        /*-------------- Report Route income -----------------*/  

    Route::get('income/report', [ReportController::class, 'incomeReport']);
    Route::post('income/report', [ReportController::class, 'generateIncomeReport']);
    Route::post('income/report', [ReportController::class, 'printIncomeReport']);

    /*--------------  Route expense_category -----------------*/

    Route::get('/income/category/{id}/delete', [IncomeCategoryController::class, 'destroy']);
    Route::get('/income/category/remove', [IncomeCategoryController::class, 'destroyAll']);
    Route::get('/income/category/trash', [IncomeCategoryController::class, 'trash']);
    Route::get('/income/category/{id}/delete/parmanently', [IncomeCategoryController::class, 'forceDelete']);
    Route::get('/income/category/{id}/restore', [IncomeCategoryController::class, 'restore']);
    Route::get('/income/category/recover', [IncomeCategoryController::class, 'recoverAll']);
    Route::get('/income/category/remove/permanently',[IncomeCategoryController::class, 'emptyTrash']);


    Route::get('expense/category/edit/{id}', [ExpenseCategoryController::class, 'edit']);
    Route::post('expense/category/update', [ExpenseCategoryController::class, 'update']);

    /*--------- Resource Route income ----------------*/
    Route::resource('/income/category', IncomeCategoryController::class);
    Route::resource('income', IncomeController::class);
    /*------------------------------------------------------------------------------- */
    
    /*--------------  Route expense -----------------*/
    Route::get('expense/{id}/delete',[ExpenseController::class,'destroy']);
    Route::get('expense/delete',[ExpenseController::class,'destroyAll']);
    Route::get('expense/trash',[ExpenseController::class,'trash']);
    Route::get('/expense/{id}/restore',[ExpenseController::class, 'restore']);
    Route::get('/expense/{id}/delete/parmanently',[ExpenseController::class, 'forceDeleted']);
    Route::get('/expense/delete/parmanently',[ExpenseController::class, 'emptyTrash']);
    Route::get('/expense/restore',[ExpenseController::class,'restoreAll']);
    Route::post('/expense/update', [ExpenseController::class,'update']);
    // Route::post('expenseCategory/update', [ExpenseCategoryController::class,'update']);
    

    /*--------------  Route expense_catergory -----------------*/

    Route::get('/expense/category/{id}/delete',[ExpenseCategoryController::class,'destroy']);
    Route::get('expense/category/trash',[ExpenseCategoryController::class,'trash']);
    Route::get('expense/category/remove',[ExpenseCategoryController::class,
    'destroyAll']);
    Route::get('/expense/category/{id}/restore',[ExpenseCategoryController::class,'restore']);
    Route::get('/expense/category/recover',[ExpenseCategoryController::class,'recoverAll']);
    Route::get('/expense/category/remove/permanently',[ExpenseCategoryController::class,'emptyTrash']);
    Route::get('/expense/category/{id}/delete/parmanently',[ExpenseCategoryController::class, 'forceDeleted']);

    
    
    /*-------------- Report Route Expense -----------------*/  
    Route::get('expense/report',[ReportController::class, 'reportExpese']);
    Route::post('expense/report', [ReportController::class, 'generateExpenseReport']);
    Route::post('expense/report', [ReportController::class, 'printExpenseReport']);

    /*-------------- Report All Route -----------------*/  
    Route::get('total',[ReportController::class,'allReport']);
    Route::post('total/report',[ReportController::class, 'printAllreport']);
    


    /*-------------- Resource Route expense -----------------*/
    Route::resource('/expense/category', ExpenseCategoryController::class);
    Route::resource('expense', ExpenseController::class);

    /*-------------- Email Route -----------------*/
    Route::get('email',[EmailController::class,'index']);
    Route::post('email/send',[EmailController::class,'send']);


    /*-------------- Profile Route  -----------------*/
    Route::get('/edit/profile',[ProfileController::class,'edit']);
    Route::post('profile/update',[ProfileController::class,'update']);

    /*-------------- Contact Route -----------------*/
    Route::get('/contact',[ContactController::class, 'create']);
    Route::post('/contact/store',[ContactController::class,'store']);
    Route::get('/contact/list',[ContactController::class,'index']);
    Route::get('/contact/list/edit/{id}',[ContactController::class,'edit']);
    Route::post('/contact/list/update',[ContactController::class,'update']);

    Route::get('contact/list/delete/{id}',[ContactController::class,'destroy']);
    Route::get('contact/list/delete',[ContactController::class, 'destroyAll']);
    Route::get('contact/list/trash',[ContactController::class, 'trash']);
    Route::get('contact/{id}/restore',[ContactController::class, 'restore']);
    Route::get('contact/restore',[ContactController::class, 'restoreAll']);
    Route::get('/contact/{id}/parmanently',[ContactController::class, 'forceDeleted']);
    Route::get('/contact/parmanently',[ContactController::class, 'emptyTrashed']);


    Route::post('/search/result', [SearchController::class, 'search']);
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
