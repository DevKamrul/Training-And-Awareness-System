@extends('admin.master')


@section('page-title')
	Add Course 
@endsection

@section('content-heading')
	Add Course 
	<br>
	<h4 style="color:green">{{Session::get('message')}}</h4> 
@endsection

@section('mainContent')
		<div class="panel-body">
	        <div class="row">
	            <div class="col-lg-6">
	                {!! Form::open(['url' => 'course/save','method'=>'post','role'=>'form', 'enctype' => 'multipart/form-data']) !!}
	                    <div class="form-group">
	                        <label>Course  Name</label>
	                        <input type="text"  name="courseName" class="form-control">
	                    </div>

	                    <div class="form-group">
	                        <label>Course Description</label>
	                        <textarea name="courseDescription" class="form-control" placeholder="Enter short Discription"></textarea>
	                    </div>

	                    <div class="form-group">
	                        <label>Course Category</label>
	                        <select class="form-control" name="courseCategory">
	                        	@foreach($categories as $category) 
	                        	<option value="1">{{$category -> categoryName}}</option>
	                        	@endforeach
	                        </select>
	                    </div>

	                    <div class="form-group">
	                        <label>Trainer Name</label>
	                        <select class="form-control" name="courseTrainer">
	                        	@foreach($trainers as $trainer) 
	                        	<option value="1">{{$trainer -> trainerName}}</option>
	                        	@endforeach
	                        </select>
	                    </div>

	                    <div class="form-group">
	                        <label>Course Fee</label>
	                        <input type="text" name="courseFee" class="form-control">
	                    </div>

	                    <div class="form-group">
	                        <label> Picture </label>
	                        <input type="file" name="picture">
	                    </div>

	                    <div class="form-group">
	                        <label>Publication Status</label>
	                        <select class="form-control" name="publicationStatus">
	                        	<option value="1">Published</option>
	                        	<option value="0">UnPublished</option>
	                        </select>
	                    </div>

	                    <div class="form-group">
	                        <input type="submit" value="Submit" class="btn btn-block btn-primary">
	                    </div>
	                {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
@endsection