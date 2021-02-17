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
}


