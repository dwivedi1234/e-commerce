<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
   public function create()
   {
       $brand = Brand::get();
       return view('admin/brand/addbrand',compact('brand'));
   }
   public function store(Request $request)
   {
     $brand = new Brand;
     $brand->name = $request->name;
     $brand->slug = make_slug($request->name);
     if ($request->icon) {
        # code...
        $image = $request->file('icon');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image_path = public_path('/uploads/category');
        $image->move($image_path, $name);
        $brand->icon = $name;
    }
  
    $brand->save();
    return redirect()->back()->with('success','Brand added successfully');

   }
   public function edit($id)
   {
       $brand = Brand::find($id);
       return view('admin/brand/edit',compact('brand'));
   }
   public function update(Request $request,$id)
   {
       $brand =  Brand::find($id);
       $brand->name = $request->name;
       $brand->slug = make_slug($request->name);
       if ($request->icon) {
          # code...
          $image = $request->file('icon');
          $name = time().'.'.$image->getClientOriginalExtension();
          $image_path = public_path('/uploads/category');
          $image->move($image_path, $name);
          $brand->icon = $name;
      }
    
      $brand->save();
      return redirect()->route('createbrand')->with('success',' Brand updated successfully');
     }
     public function delete($id)
     {
         $brand = Brand::find($id);
         if ($brand->delete()) {
            # code...
            return redirect()->back()->with('success','Brand deleted successfully') ;
        } else {
            # code...
            return redirect()->back()->with('warning','something went wrong') ;
        }  

         
     }


   }

