@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Expenses as $Expense)
                                    <tr>
                                        <td>{{$Expense->CategoryId}}</td>
                                        <td>{{$Expense->Description}}</td>
                                        <td>{{$Expense->Amount}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Total Income</th>
                                <th>{{$TotalExpense}}</th>
                            </tfoot>
                        </table>
                        <button  class="btn btn-dark" onclick="window.print()">Print</button>
					</div>
				</div>
            </div>
        </div>
        
@endsection