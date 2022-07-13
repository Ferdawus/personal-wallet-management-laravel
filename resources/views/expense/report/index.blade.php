@extends('layouts.main')
@section('content')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        {{Form::open(['url'=>'expense/report'])}}
                            <figure class="heading text-center">
                                <h1>Expense Report</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                <figure>
                                    <label for="Category" class="control-level">Category</label>
                                    <select name="CategoryId" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($ExpenseCategories as $Category)
                                            <option value="{{$Category->id}}">{{$Category->Name}}</option>
                                        @endforeach
                                    </select>
                                </figure>
                                <figure>
                                    <label for="DateFrom" class="control-level">DateFrom</label>
                                    <input type="date" name="DateFrom" class="form-control">
                                </figure>
                                <figure>
                                    <label for="DateTo" class="control-level">DateTo</label>
                                    <input type="date" name="DateTo" class="form-control">
                                </figure>
                                <input type="submit" name="submit" value="Generate Report" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
					</div>
				</div>
            </div>
        </div>
        
@endsection