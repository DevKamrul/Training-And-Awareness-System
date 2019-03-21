@extends('admin.master')


@section('page-title')
    Add Training 
@endsection

@section('content-heading')
    Add Training 
    <br>
    {{Session::get('message')}}
    <br>
    Total Item in this page :{{$category->count()}}
     <br>
    Total Item:{{$category->total()}}
     <br>
    Total Item in this page :{{$category->currentpage()}}
@endsection

@section('mainContent')

	<div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Discribtion</th>
                    <th>Publications</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- <tbody> -->
            	
				<?php $i=0; ?>
				@foreach ($category as $singlecategory)
                <tr class="even gradeC">
                    <td>{{++$i}}</td>
                    <td>{{$singlecategory -> categoryName}}</td>
                    <td>{{$singlecategory -> shortDescription}}</td>
                    <td>{{($singlecategory -> publicationStatus==1)?'Published':'Unpublished'}}</td>
                    <td><a style="color:blue" href="{{url('/category/edit/'.$singlecategory ->id)}}">Edit</a> | <a style="color:blue" href="{{url('/category/delete/'.$singlecategory ->id)}}">Delete</td>
                </tr>
          		@endforeach
                
            </tbody>
        </table>

        {{$category->links()}}
    </div>
@endsection