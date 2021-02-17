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
}


