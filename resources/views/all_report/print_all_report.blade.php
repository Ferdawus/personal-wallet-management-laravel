@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 d-flex">
                        {{-- showincome table data  --}}
                        <div class="col-md-5">
                            <h2 class="text-center">Income</h2>
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                   
                            </thead>
                            <tbody>
                                @foreach ($Incomes as $Income)
                                    <tr>
                                        <td>{{$Income->CategoryId}}</td>
                                        <td>{{$Income->IncomeDate}}</td>
                                        <td>{{$Income->Description}}</td>
                                        <td>{{$Income->Amount}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Income</th>
                                    <th></th>
                                    <th></th>
                                    <th>{{$TotalIncome}}</th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>

                        <div class="col-md-5 ms-5">
                            <h2 class="text-center">Expense</h2>
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                   
                            </thead>
                            <tbody>
                                @foreach ($Expenses as $Expense)
                                    <tr>
                                        <td>{{$Expense->CategoryId}}</td>
                                        <td>{{$Expense->ExpenseDate}}</td>
                                        <td>{{$Expense->Description}}</td>
                                        <td>{{$Expense->Amount}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Expense</th>
                                    <th></th>
                                    <th></th>
                                    <th>{{$TotalExpense}}</th>
                                </tr>
                            </tfoot>
                        </table>


                        
                        </div>
					</div>
				</div>

                <div class="row mt-5">
                    <div class="col-md-4 m-auto">
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Total Income</th>
                                <th>{{$TotalIncome}}</th>
                            </tr>
                            <tr>
                                <th>Total Expense</th>
                                <th>{{$TotalExpense}}</th>
                            </tr>
                            <tr>
                                <th>Rest Amount</th>
                                <th>{{$TotalIncome - $TotalExpense}}</th>
                            </tr>
                            
                        </table>
                        
                    </div>
                          
                </div>
            </div>
           <div class="row">
               
           </div>
            <div class="button offset-sm-7">
                <button type="button" onclick="window.print()" class="text-center btn btn-info mx-auto">Print</button>
                                                   
            </div>

        </div>
        
@endsection