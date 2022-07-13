@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <table class="table table-responsive table-bordered table-stripped mt-md-3 font-weight-bold">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Attributes</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($ExpenseSearch as $Result )
                                                
                                    <tr>
                                        <th>Gategory Name</th>
                                        <td>{{$Result->ExpenseCategory}}</td>
                                    </tr>
                                    <tr>
                                        <th>Amount</th>
                                        <td>{{$Result->Amount}}</td>
                                       
                                    </tr>
                                    <tr>
                                    <th>Descriptions</th>
                                    <td>{{$Result->Description}}</td>
                                   
                                    </tr>
                                    <tr>
                                    <th>Date</th>
                                    <td>{{$Result->ExpenseDate}}</td>
                                   
                                    </tr>
                                    @endforeach
                            </tbody>
                    </table>
					</div>
				</div>
            </div>
        </div>
        
@endsection