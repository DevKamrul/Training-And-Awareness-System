<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\traing;
use App\Course;
use DB;

class courseController extends Controller
{
    public function index()
    { 
    	$categories = Category::where('publicationStatus',1) -> get();
    	$trainers = traing::all();
    	return view('admin.course.courseAdd', ['categories' => $categories ] , ['trainers' => $trainers ] );
    }
    public function save(Request $request){
        // dd($request -> all());

        $courseAdd = new Course();

        $courseAdd -> courseName = $request -> courseName;
  		$courseAdd -> courseDescription = $request -> courseDescription;
  		$courseAdd -> courseCategory = $request -> courseCategory;
  		$courseAdd -> courseTrainer = $request -> courseTrainer;
  		$courseAdd -> courseFee = $request -> courseFee;
  		$courseAdd -> publicationStatus= $request -> publicationStatus;
  		$courseAdd -> picture = 'picture';

  		$courseAdd->save();

  		$lastId = $courseAdd -> id;
  		$pictureInfo = $request -> file('picture');
  		$pictureName = $lastId.$pictureInfo -> getClientOriginalName();
  		$Folder = "CourseImage/";
  		$pictureInfo -> move($Folder,$pictureName);
  		$pictureUrl = $Folder.$pictureName;
  		$coursepicture = Course::find($lastId);
  		$coursepicture-> picture = $pictureUrl;

  		$coursepicture-> save();

  		return redirect('/course/save')->with('message',"Data insert successfully.");

  	}
  	public function manage()
    {
    	$courses = DB::table('courses')
    			->join('categories', 'categories.id','=','courseCategory')
    			->join('traings', 'traings.id','=','courseTrainer')
    			->select('courses.*','categories.categoryName as Catname','traings.trainerName as T_Name')
    			->get();

    	return view('admin.course.courseManage',['courses'=> $courses]);
    }
}
