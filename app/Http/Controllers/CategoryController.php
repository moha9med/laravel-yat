<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::get();
        return view('category.categories',compact('categories'));
    }


    public function show($id){
        $category = Category::find($id);
        return view('category.category',compact('category'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){

        Category::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        // return back();
        return redirect( route('allcategories') );
    }


    public function edit($id){
        $category= category::findOrFail($id);
        return view('category.edit',compact('category'));
    }


    public function update(request $request,$id){

        $category= category::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect( route('singlecategory', $id) );


    }


    public function delete($id){

        category::findOrFail($id)->delete();
        return redirect( route('allcategories'));

    }
}


