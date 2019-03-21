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
    Training  Form

	<div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                
                	{!! Form::open(['url' => 'training/save','method' => 'POST', 'role' => 'form']) !!}
                    <div class="form-group">
                        <label>Training Name</label>
                        <input class="form-control" name="trainingName">
                    </div>

                    <div class="form-group">
                        <label>Trainer Name</label>
                        <input class="form-control" name="trainerName">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="shortDescription" placeholder="enter short Description"></textarea>
                   
                    </div>

                    <div class="form-group">
                    	<label>Skills</label>
                        <select name="skills">
                        	<option value="1">Web Development</option>
                        	<option value="0">Androied Apps Development</option>
                        </select>
                    </div>
                     <div class="form-group">
                     		<input type="submit" value="submit" class="btn btn-block btn-primary" >
                    </div>

               {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection