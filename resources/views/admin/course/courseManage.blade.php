@extends('admin.master')

@section('page-title')
    ALL Course 
@endsection

@section('content-heading')
    ALL Course 
    <br>
    <h4 style="color:green">{{Session::get('message')}}</h4> 
@endsection

@section('mainContent')
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>C Name</th>
                    <th>C Description</th>
                    <th>C Category</th>
                    <th>Trainer Name</th>
                    <th>C Fee</th>
                    <th>Picture</th>
                    <th>Publications</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- <tbody> -->
            <tbody> 

                <?php $i=0; ?>
                @foreach ($courses as $Singlecourse)
                <tr class="even gradeC">
                    <td>{{++$i}}</td>
                    <td>{{$Singlecourse -> courseName}}</td>
                    <td>{{$Singlecourse -> courseDescription}}</td>
                    <td>{{$Singlecourse -> Catname}}</td>
                    <td>{{$Singlecourse -> T_Name}}</td>
                    <td>{{$Singlecourse -> courseFee}}</td>
                    <td><img src="{{$Singlecourse -> picture}}" width="60px" alt="no pic"></td>
                    <td>{{($courses -> publicationStatus==1)?'Published':'Unpublished'}}</td>
                    <td><a style="color:blue" href="{{url('/course/edit/'.$courses ->id)}}">Edit</a> | <a style="color:blue" href="{{url('/course/delete/'.$courses ->id)}}">Delete</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>


@endsection