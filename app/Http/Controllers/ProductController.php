<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ShowAddProductForm()
    {

        $allCategory = Category::all();
        return view('Add_Product_Form',compact('allCategory'));
    }

    #Get any products wired with the spesefy Category
    function ShowProductFromGatygories($id){
        $categories = Category::findOrFail($id);
        if (isset($categories)) {
            $products =  Category::findOrFail($id)->product;
            return view('Products_page',compact('products'));
        }
    }



    function add_product_process(Request $request)
    {
        $request->validate([
            'name'          =>  'string|min:3|required',
            'image'         =>  'image|required|max:2028|mimes:jpg,jpeg,png,gif,webp',
            'price'         =>  'integer|required|min:1',
            'description'   =>  'string|required|min:8',
            'categories_id' =>  'integer|required'
        ]);
        $new_product  = new Product();
        $new_product->name      =   $request->name;
        $new_product->price     =   $request->price;
        $new_product->description = $request->description;
        $new_product->categories_id = $request->categories_id;
        if ($request->hasFile('image')) {
            $file = $request->File('image');
            $newFileNameImage = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'),$newFileNameImage);
            $new_product->image = $newFileNameImage;
            $new_product->save();
           return back()->with('status','You new Product is Already Adde to Store!');
        }
         
    }


    function GoHome(){
        return view('home');
    }

}
