@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/income')}}" class="btn btn-primary">   << Back to List </a>
                        <a href="{{url('/income/restore')}}" class="btn btn-success">Restore All</a>
                        <a href="{{url('/income/delete/parmanently')}}" class="btn btn-info">Empty Trash</a>

                        {{-- <a href="{{url('/income/trash')}}" class="btn btn-info">View Trash</a> --}}
                        {{-- showincome table data  --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($TrashedIncomes as $Income)
                                    <tr>
                                        <td>{{$Income->IncomeDate}}</td>
                                        <td>{{$Income->Description}}</td>
                                        <td>{{$Income->Amount}}</td>
                                        <td>
                                            <a href="/income/{{$Income->id}}/delete/parmanently" class="btn btn-danger"> Parmanently  Delete</a>
                                            <a href="/income/{{$Income->id}}/restore" class="btn btn-success">Restore</a>
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