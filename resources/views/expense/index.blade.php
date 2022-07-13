@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('expense/create')}}" class="btn btn-primary">Add New expense</a>
                         <a href="{{url('/expense/trash')}}" class="btn btn-info">View Trash</a>
                        <a href="{{url('/expense/delete')}}" class="btn btn-danger">Delete All</a>
                        {{-- showincome table data  --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Expenses as $Expense)
                                    <tr>
                                        <td>{{$Expense->CategoryName}}</td>
                                        <td>{{$Expense->ExpenseDate}}</td>
                                        <td>{{$Expense->Description}}</td>
                                        <td>{{$Expense->Amount}}</td>
                                        <td>
                                            <a href="/expense/{{$Expense->id}}/edit" class="btn btn-info">Edit</a>
                                            <a href="/expense/{{$Expense->id}}/delete" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
					</div>
				</div>
            </div>
        </div>
        
@endsection