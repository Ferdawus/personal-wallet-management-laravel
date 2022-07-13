@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('income/create')}}" class="btn btn-primary">Add New Income</a>
                        <a href="{{url('/income/trash')}}" class="btn btn-info">View Trash</a>
                        <a href="{{url('/income/delete')}}" class="btn btn-danger">Delete All</a>
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
                                @foreach ($Incomes as $Income)
                                    <tr>
                                        <td>{{$Income->CategoryName}}</td>
                                        <td>{{$Income->IncomeDate}}</td>
                                        <td>{{$Income->Description}}</td>
                                        <td>{{$Income->Amount}}</td>
                                        
                                        <td>
                                            <a href="/income/edit/{{$Income->id}}" class="btn btn-info">Edit</a>
                                            <a href="/income/{{$Income->id}}/delete" class="btn btn-danger">Delete</a>
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