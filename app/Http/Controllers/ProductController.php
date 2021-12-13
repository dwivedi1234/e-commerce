<?php

namespace App\Http\Controllers;
use\App\Models\Product;
use\App\models\Category;
use\App\models\Brand;
use Illuminate\Http\Request;
use Image;
class ProductController extends Controller
{
    public function create()
    {
        $data['category'] = Category::get();
        $data['brand'] = Brand::get();
        // return $data;
        return view('admin/product/addproduct',compact('data'));
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->description= $request->description;
        $product->slug = make_slug($request->product_name);
        if ($request->thumbnail) {
            # code...
            $image = $request->file('thumbnail');
            $input['imagename'] = time().'.'.$image->extension();

            $destinationPath = public_path('/uploads/product');
            $img = Image::make($image->path());

            // $img->resize(270, 330, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath.'/'.$input['imagename']);

            $img->resize(270, 330)->save($destinationPath.'/'.$input['imagename']);
            $product->thumbnail= $input['imagename'];

            
        }

         $product->save();
         return redirect()->route('allproduct')->with('success','product added successfully');
         

    }
    public function allproduct()
    {
        $product = Product::get();
        return view('admin/product/allproduct',compact('product'));
 
    }
    public function editproduct($id)
    {
       $product = Product::find($id);
       $category = Category::get();
       $brand = Brand::get();
       return view('admin/product/editproduct',compact('product','category','brand'));
    }


    public function updateproduct(Request $request, $id)
    {
        $product =  Product::find($id);
        $product->name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->description= $request->description;
        $product->slug = make_slug($request->product_name);
        if ($request->thumbnail) {
            # code...

            $image = $request->file('thumbnail');
            $input['imagename'] = time().'.'.$image->extension();

            $destinationPath = public_path('/uploads/product');
            $img = Image::make($image->path());

            // $img->resize(270, 330, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath.'/'.$input['imagename']);

            $img->resize(270, 330)->save($destinationPath.'/'.$input['imagename']);

            $product->thumbnail= $input['imagename'];


        }
         $product->save();
         return redirect()->route('allproduct')->with('success','product updated successfully');

    }
    public function productdetail()
    {
        # code...
        $product = Product::get();
        return view('admin/product/details',compact('product'));
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success','product deleted successfully');
    }
}
