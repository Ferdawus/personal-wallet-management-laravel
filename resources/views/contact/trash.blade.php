@extends('layouts.main')
@section('content')
  
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/contact/list')}}" class="btn btn-primary"> << Back To Home</a>
                        <a href="{{url('/contact/restore')}}" class="btn btn-info">Restor All</a>
                        <a href="{{url('/contact/parmanently')}}" class="btn btn-dark">Empty Trash </a>
                         
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
                                @foreach ($TrashedContacts as $TrashedContact)
                                <tr>
                                   <td>{{$TrashedContact->Name}}</td>
                                   <td>{{$TrashedContact->Email}}</td>
                                   <td>{{$TrashedContact->Phone}}</td>
                                   <td>
                                       <a href="/contact/{{$TrashedContact->id}}/parmanently" class="btn btn-danger">ParmanentlyDelete</a>
                                       <a href="/contact/{{$TrashedContact->id}}/restore" class="btn btn-success">Restore</a>
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