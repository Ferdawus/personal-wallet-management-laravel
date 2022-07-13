@extends('layouts.main')
@section('content')
  
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">

                        <h1>Income Category</h1>
                        <a href="{{url('income/category')}}" class="btn btn-warning"> << Back To list</a>
                        {{Form::open(['url'=>'income/category'])}}
                            <figure class="">
                                <label for="">Caregory Name:</label>
                                <input type="text" name="Name" class="">
                                <input type="submit" name="submit" value="Add Caregory" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}

					</div>
				</div>
            </div>
        </div>
        
@endsection