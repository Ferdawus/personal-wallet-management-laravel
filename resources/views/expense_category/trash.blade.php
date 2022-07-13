@extends('layouts.main')
@section('content')
  
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/expense/category')}}" class="btn btn-primary"> << Back To List</a>
                         <a href="/expense/category/recover" class="btn btn-info"> Restore All</a>
                         <a href="/expense/category/remove/permanently" class="btn btn-light"> Empty Trash</a>
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
                                @foreach ($TrashedExpenses as $Category)
                                <tr>
                                    <td>{{$Category->Name}}</td>
                                    <td>{{$Category->created_at}}</td>
                                    <td>{{$Category->updated_at}}</td>
                                    <td>
                                    <a href="/expense/category/{{$Category->id}}/delete/parmanently" class="btn btn-danger">Parmanently Delete</a>
                                    <a href="/expense/category/{{$Category->id}}/restore" class="btn btn-success">Restore</a>

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