@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('income')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'profile/update','enctype'=>'multipart/form-data'])}}
                            <figure class="heading text-center">
                                <h1>Edit Profile</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                @if (is_null($User->photo))
                                
                                    <img src="/uploads/user/profile.png" alt="User Image" class="img img-responsive" height="100">
                                
                                @else
                                    <img src="/uploads/user/{{$User->photo}}" alt="userImage" class="img img-responsive" height="100px" width="100px" style="border-radius: 50%">
                                    {{-- <img src="/uploads/user{{$User->photo}}" alt="User Image" class="img img-responsive" height="100"> --}}
                                @endif
                                
                                
                                <figure>

                                    <label for="Name" class="control-level">Name:</label>
                                    <input type="text" name="name" value='{{$User->name}}' class="form-control">
                                </figure>
                                <figure>
                                    <label for="Email" class="control-level">Email:</label>
                                    <input type="email" name="email" value="{{$User->email}}" class="form-control">
                                </figure>
                                <figure>
                                    <label for="Photo" class="control-level">Photo:</label>
                                    <input type="file" name="photo">
                                </figure>
                                <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection