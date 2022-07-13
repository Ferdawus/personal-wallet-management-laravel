@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                         <a href="{{url('expense/category/create')}}" class="btn btn-primary">Add New expense_category</a>
                         <a href="{{url('expense/category/trash')}}" class="btn btn-info">View Trash</a>
                         <a href="{{url('expense/category/remove')}}" class="btn btn-danger">Delete All</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Categories as $Category)
                                <tr>
                                    <td>{{$Category->Name}}</td>
                                    <td>{{$Category->created_at}}</td>
                                    <td>{{$Category->updated_at}}</td>
                                    <td>
                                        <a href="/expense/category/edit/{{$Category->id}}" class="btn btn-info">Edit</a>
                                        <a href="/expense/category/{{$Category->id}}/delete" class="btn btn-danger">Delete</a>
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