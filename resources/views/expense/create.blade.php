@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('expense')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'expense'])}}
                            <figure class="heading text-center">
                                <h1>Expense Add</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                <figure>
                                    <label for="Category" class="control-level">Expense Category</label>
                                    <select name="CategoryId" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($ExpensesCategories as $Category)
                                            <option value="{{$Category->id}}">{{$Category->Name}}</option>
                                        @endforeach
                                    </select>
                                </figure>
                                <figure>
                                    <label for="Amount" class="control-level">Amount</label>
                                    <input type="number" name="Amount" class="form-control" max="2147483647" min="-2147483647">
                                </figure>
                                <figure>
                                    <label for="Discription" class="control-level">Discription</label>
                                    <input type="text" name="Description" class="form-control">
                                </figure>
                                <input type="submit" name="submit" value="Add Income" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection