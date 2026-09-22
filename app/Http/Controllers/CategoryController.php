<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    # Function For Show The   Category Page
    function showCategories(){
        $allCategory = Category::all();
        return view('Categories_page',compact('allCategory'));
    }


    # Function For Show The Form for Adding a new Category to database
    function ShowAddCategoryForm()
    {
        return view('Add_Category_Form');
    }

    
    # Function For Adding a new category To Database

    function registration_process(Request $request){

        $request->validate([
            'name'          =>  'string|min:3|required',
            'description'   =>  'string|max:250|required' ,
            'image'         =>  'image|max:2028|required|mimes:jpg,jpeg,png,gif,webp'
        ]);

        $NewCategory = new Category();
        $NewCategory->name =  $request->name;
        $NewCategory->description = $request->description;
        if($request->hasFile('image')) 
            {
                $file = $request->file('image');
                $image_file = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/'),$image_file);
                $NewCategory->image = $image_file;
            }
        $NewCategory->save();
        return redirect()->back()->with('status','Your New Category is Already Adde To your Store');
    }
















        public function csrftoken() # هاذي تاع الخرا تاع الطوكن
        {
            return csrf_token();
        }


}