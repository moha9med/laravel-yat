<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    // show all products
    public function index(){
        $products = Product::paginate(10);
        return view('product.products',compact('products'));
    }


    // method to display single product
    public function show($id){
        $product = Product::findOrFail($id);
        return view('product.product',compact('product'));
    }

    // method to create products
    public function add(){
        return view('product.addproduct');
    }
    

    // method to store data
    public function store(Request $request){

        $request->validate([
            'title'=> 'required',
            'description'=>'required',
            'price'=>'required | integer',
            'image'=> 'image'
        ]);

        // move image to public folder and save it name in database 
        $img = $request->file('image');
       $imagename = $request->file('image')->getClientOriginalName();
        $img->move( public_path('images/products') ,$imagename);


        // 1- store data into db
        Product::Create([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'image'=> $request->file('image')->getClientOriginalName(),
        ]);

       
        // 2- redirct to any other view
        return redirect(  route('allproducts') );
    }



    // method to edit form
    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.editproduct',compact('product'));
    }


    // updat method
    public function update(Request $request, $id){

        $request->validate([
            'title'=> 'required',
            'description'=>'required',
            'price'=>'required | integer'
        ]);

        $product = Product::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);


        return redirect(  route('singleProduct',$id) );

    }



    // delete product method
    public function delete($id){
        $product = Product::findOrFail($id)->delete();

        return redirect( route('allproducts'));

    }
}


