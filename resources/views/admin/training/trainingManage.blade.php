@extends('admin.master')

@section('page-title')
	Manage Training 
@endsection

@section('content-heading')
	Manage Training
@endsection

@section('mainContent')

	<div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>SI.</th>
                        <th>Title</th>
                        <th>Trainer Name</th>
                        <th>Description</th>
                        <th>Skills</th>
                        <th>Action</th>
               	 </tr>
                </thead>
                      <tbody>
                      	<?php
                      	$i=0;
                      	?>
                      	@foreach($training as $singleTraining) 	
                           	<tr class="odd gradeX">
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $singleTraining -> trainingName}} </td>
                                    <td>{{ $singleTraining -> trainerName}} </td>
                                    <td>{{ $singleTraining -> shortDescription }}</td>
                                   	<td class="center">{{ ($singleTraining -> skills == 1)? 'Web Development' : 'Androied Apps Development' }}</td>
                                    <td class="center">Edit | Delete</td>
                            </tr>
                            @endforeach 
                        </tbody>
                </table>    
    </div>
    @endsection

