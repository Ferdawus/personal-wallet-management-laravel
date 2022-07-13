@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('income')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'contact/store'])}}
                            <figure class="heading text-center">
                                <h1>Contact Add</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                <figure>
                                    <label for="Name" class="control-level">Name</label>
                                    <input type="text" name="Name" class="form-control">
                                </figure>
                                <figure>
                                    <label for="Email" class="control-level">Email</label>
                                    <input type="email" name="Email" class="form-control">
                                </figure>
                                <figure>
                                    <label for="Phone" class="control-level">Phone</label>
                                    <input type="text" name="Phone" class="form-control">
                                </figure>
                                
                                <input type="submit" name="submit" value="Add Contact" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection