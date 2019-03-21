@extends('admin.master')


@section('page-title')
	Add Training 
@endsection

@section('content-heading')
	Add Training 
	<br>
	{{Session::get('message')}}
@endsection

@section('mainContent')
	Category Form
		<div class="panel-body">
	        <div class="row">
	            <div class="col-lg-6">
	                {!! Form::open(['url' => 'category/save','method'=>'post','role'=>'form' ]) !!}
	                    <div class="form-group">
	                        <label>Category Name</label>
	                        <input name="categoryName" class="form-control">
	                    </div>
	                    <div class="form-group">
	                        <label>Short Discription</label>
	                        <textarea name="shortDescription" class="form-control" placeholder="Enter short Discription"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label>Publication Status</label>
	                        <select name="publicationStatus">
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