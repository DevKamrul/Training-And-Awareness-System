<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;


class CategoryController extends Controller
{ 
    public function index()
    {
    	return view('admin.category.categoryAdd');
    }
    public function save(Request $request)
    {
    	$categoryAdd = new Category();

    	$categoryAdd -> categoryName = $request -> categoryName;
    	$categoryAdd -> shortDescription = $request -> shortDescription;
    	$categoryAdd -> publicationStatus = $request ->	publicationStatus;

    	$categoryAdd->save();

    	return redirect('/category/save')->with('message',"Data insert successfully.");
    }
    public function manage()
    {
    	$categories = DB::table('categories')->paginate(5);
    	return view('admin.category.categoryManage',['category'=> $categories]);
    }

    public function edit($id)
    {
        $categoryEdit = Category::where('id',$id)-> first();

        return view('admin.category.categoryEdit', ['category'=> $categoryEdit]);
    }

    public function update(Request $request){
        // dd($request -> all());

        $category = Category:: find($request -> categoryId);

        $category -> categoryName = $request -> categoryName;
        $category -> shortDescription = $request -> shortDescription;
        $category -> publicationStatus = $request -> publicationStatus;

        $category->save();

        return redirect('/category/manage')->with('message',"Data Update successfully.");

    }

    public function delete($id)
    {
        $categoryDelete = Category::find($id);
        $categoryDelete -> delete();

        return redirect('/category/manage')->with('message',"Data Delete successfully.");
    }
}
