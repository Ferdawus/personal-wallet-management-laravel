@extends('layouts.main')
@section('content')
  
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">

                        <h1>Enxpense Category</h1>
                        <a href="{{url('expense/category')}}" class="btn btn-warning"> << Back To list</a>
                        {{Form::open(['url'=>'expense/category/update'])}}
                            <figure class="">
                                <input type="hidden" name="id" value="{{$expenseCategory->id}}">
                                <label for="">Caregory Name:</label>
                            <input type="text" name="Name" class="" value="{{$expenseCategory->Name}}">
                                <input type="submit" name="submit" value="Update Caregory" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}

					</div>
				</div>
            </div>
        </div>
        
@endsection
 