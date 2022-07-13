@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        <a href="{{url('income')}}" class="btn btn-warning"> << Back To List</a>
						{{Form::open(['url'=>'/income/update'])}}
                            <figure class="heading text-center">
                                <h1>Income Add</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                <figure>
                                    <input type="hidden" name="id" value="{{$Income->id}}">
                                    <label for="Category" class="control-level">Income Category</label>
                                    {{-- <select name="CategoryId" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($IncomeCategories as $Category)
                                            <option value="{{$Category->id}}">{{$Category->Name}}</option>
                                        @endforeach
                                    </select> --}}
                                    <select name="CategoryId" id="" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($IncomeCategories as $Category)
                                        @if ($Income->CategoryId == $Category->id)
                                            <option value="{{$Category->id}}" selected>{{$Category->Name}}</option>
                                        @else
                                            <option value="{{$Category->id}}">{{$Category->Name}}</option>
                                        @endif    
                                        @endforeach
                                    </select>
                                </figure>
                                <figure>
                                    <label for="Amount" class="control-level" >Amount</label>
                                    <input type="number" class="form-control" value="{{$Income->Amount}}">
                                </figure>
                                <figure>
                                    <label for="Discription" class="control-level">Discription</label>
                                    <input type="text" name="Description"  class="form-control" value="{{$Income->Description}}">
                                </figure>
                                <input type="submit" name="submit" value="Update Income" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection