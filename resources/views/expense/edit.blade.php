@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('/expense')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'/expense/update'])}}
                        <input type="hidden" name="id" value="{{$Expense->id}}">
                            <figure class="heading text-center">
                                <h1>Edit Expense</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                <figure>
                                    <label for="Category" class="control-level">Expense Category</label>
                                    <select name="CategoryId" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($ExpenseCategories as $Category)
                                        @if ($Expense->CategoryId == $Category->id)
                                            <option value="{{$Category->id}}" selected>{{$Category->Name}}</option>
                                        @else
                                            <option value="{{$Category->id}}">{{$Category->Name}}</option>
                                        @endif    
                                        @endforeach
                                    </select>
                                </figure>
                                <figure>
                                    <label for="Amount" class="control-level">Amount</label>
                                    <input type="number" name="Amount" class="form-control" value='{{$Expense->Amount}}'>
                                </figure>
                                <figure>
                                    <label for="Discription" class="control-level">Discription</label>
                                    <input type="text" name="Description" class="form-control" value="{{$Expense->Description}}">
                                </figure>
                                <input type="submit" name="submit" value="Update Expense" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection