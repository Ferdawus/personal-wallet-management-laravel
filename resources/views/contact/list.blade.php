@extends('layouts.main')
@section('content')
  
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/contact')}}" class="btn btn-primary"> Add Contact</a>
                        <a href="{{url('/contact/list/trash')}}" class="btn btn-info">View Trash </a>
                        <a href="{{url('/contact/list/delete')}}" class="btn btn-danger">Delete All </a>
                         
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ContactShows as $ContactShow)
                                <tr>
                                   <td>{{$ContactShow->Name}}</td>
                                   <td>{{$ContactShow->Email}}</td>
                                   <td>{{$ContactShow->Phone}}</td>
                                   <td>
                                       <a href="/contact/list/edit/{{$ContactShow->id}}" class="btn btn-info">Edit</a>
                                       <a href="/contact/list/delete/{{$ContactShow->id}}" class="btn btn-danger">delete</a>
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