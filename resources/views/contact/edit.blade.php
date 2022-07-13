@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/contact/list')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'/contact/list/update'])}}
                        <input type="hidden" name="id" value="{{$Contacts->id}}">
                            <figure class="heading text-center">
                                <h1>Edit Expense</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                
                                <figure>
                                    <label for="Name" class="control-level">Name</label>
                                    <input type="text" name="Name" class="form-control" value='{{$Contacts->Name}}'>
                                </figure>
                                <figure>
                                    <label for="Email" class="control-level">Email</label>
                                    <input type="text" name="Email" class="form-control" value="{{$Contacts->Email}}">
                                </figure>
                                <figure>
                                    <label for="Phone" class="control-level">Phone</label>
                                    <input type="text" name="Phone" class="form-control" value="{{$Contacts->Phone}}">
                                </figure>
                                <input type="submit" name="submit" value="Update Contact" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection