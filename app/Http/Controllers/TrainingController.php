<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\traing;

class trainingController extends Controller
{
    public function index()
    {
    	return view('admin.training.trainingAdd');
    }

    public function save(Request $request)
    {
    	$trainingAdd = new traing();

    	$trainingAdd -> trainingName = $request -> trainingName;
    	$trainingAdd -> trainerName = $request -> trainerName;
    	$trainingAdd -> shortDescription	 = $request -> shortDescription;
    	$trainingAdd -> skills = $request -> skills;

    	$trainingAdd ->save();

    	return redirect('/training/save')->with('message','Insert sucessfully');


    }

    public function manage(){

    	$traings= traing::all();

    	return view('admin.training.trainingManage',['training'=>$traings]);
    }
}
