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
                                @foreach ($Incomes as $Income)
                                    <tr>
                                        <td>{{$Income->CategoryId}}</td>
                                        <td>{{$Income->Description}}</td>
                                        <td>{{$Income->Amount}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Total Income</th>
                                <th>{{$TotalIncome}}</th>
                            </tfoot>
                        </table>
                        <button  class="btn btn-dark" onclick="window.print()">Print</button>
					</div>
				</div>
            </div>
        </div>
        
@endsection