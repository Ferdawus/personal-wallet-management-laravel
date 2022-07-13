@extends('layouts.main')
@section('content')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
                        
						{{Form::open(['url'=>'/email/send','method'=>'post','enctype'=>'multipart/form-data'])}}
                            <figure class="heading text-center">
                                <h1>Mail From</h1>
                            </figure>
                            <figure class="col-md-5 mx-auto">
                                
                                <figure>
                                    <label for="To" class="control-level">To</label>
                                    <input type="text" name="To" class="form-control">
                                </figure>
                                <figure>
                                    <label for="Subject" class="control-level">Subject</label>
                                    <input type="text" name="Subject" class="form-control">
                                </figure>
                                <figure >
                                    <textarea name="Message" id="" cols="60" rows="10" placeholder="Massage"></textarea>
                                </figure><br>
                                <input type="submit" name="submit" value="Send" class="btn btn-primary">
                            </figure>
                        {{Form::close()}}
                        
					</div>
				</div>
            </div>
        </div>
        
@endsection